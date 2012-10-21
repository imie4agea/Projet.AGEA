<?php

/* ==============================================================================
  CONSTANTES
  ============================================================================== */

define('ROOT_DIR', dirname(dirname(__FILE__)) . '/');

/* ==============================================================================
  CONFIGURATION
  ============================================================================== */

include_once ROOT_DIR . 'app/config/config.php';

/* ==============================================================================
  PARAMÉTRAGE
  ============================================================================== */

foreach ($em->getRepository('Metadata')->findAll() as $metadata){
    define(strtoupper($metadata->getName()), $metadata->getValue());
    View::getInstance()->assign($metadata->getName(), $metadata->getValue());
}

/* ==============================================================================
  LOCALISATION
  ============================================================================== */

date_default_timezone_set(TIMEZONE);
setlocale(LC_ALL, LOCALE);

/* ==============================================================================
  SMARTY
  ============================================================================== */

include_once CONFIG_DIR . 'smarty.php';

/* ==============================================================================
  PAGE
  ============================================================================== */

if (isset($_GET['p'])){
    $page = $em->getRepository('Page')->findOneBy(array('name' => $_GET['p']));
} else {
  $page = $em->getRepository('Page')->findOneBy(array('name' => 'accueil'));
}

if (!($page instanceof Page)) {
    $page = $em->getRepository('Page')->findOneBy(array('name' => 'accueil'));
}

$pages = $em->getRepository('Page')->findAll();
$map   = array();

foreach ($pages as $_page){
    $map[$_page->getSection()->getName()][$_page->getName()] = $_page->getTitle();
}

View::getInstance()->assign('page_template', $page->getSection()->getName() . "/pages/" . $page->getName() . ".tpl");
View::getInstance()->assign('section_template', $page->getSection()->getName() . "/" . $page->getSection()->getName() . ".tpl");
View::getInstance()->assign('map', $map);

/* ==============================================================================
  CONTRÔLEURS
  ============================================================================== */

$controller = new Controller();
$controller->setPage($page);

/* ==============================================================================
  RESSOURCES
  ============================================================================== */

// Scripts de developpement
if (ENV_MODE == 'dev'){
    $controller->setJs(array(
        JS . 'shortcut.js')
    );
}

// JS de la page
if (file_exists(JS . $controller->getPage()->getName() . '.js')) $controller->setJs(array(JS . $controller->getPage()->getName() . '.js'));

// CSS de la page
if (file_exists(CSS . $controller->getPage()->getName() . '.css')) $controller->setCss(array(CSS . $controller->getPage()->getName() . '.css' => 'all'));

/* ==============================================================================
  SESSION
  ============================================================================== */

session_start();

/* ==============================================================================
  PROCEDURES
  ============================================================================== */

// Contrôles de la section
if (file_exists(CONTROLLERS_DIR . $page->getSection()->getName() . '.php')) include_once CONTROLLERS_DIR . $page->getSection()->getName() . '.php'; 

// Contrôles de la page
if (file_exists(CONTROLLERS_DIR . $page->getName() . '.php')) include_once CONTROLLERS_DIR . $page->getName() . '.php'; 

/* ==============================================================================
  AFFICHAGE
  ============================================================================== */

$controller->view();