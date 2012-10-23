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

$metadata = getEntityManager()->getRepository('Metadata')->findAll();

foreach ($metadata as $data){
    define(strtoupper($data->getName()), $data->getValue());
    View::getInstance()->assign($data->getName(), $data->getValue());
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

$pages = ArrayEntity::toArrayAll('Page');

View::getInstance()->assign('page_template', $page->getSection()->getName() . "/pages/" . $page->getName() . ".tpl");
View::getInstance()->assign('section_template', $page->getSection()->getName() . "/" . $page->getSection()->getName() . ".tpl");
View::getInstance()->assign('pages', $pages);

/* ==============================================================================
  CONTRÔLEUR
  ============================================================================== */

$controller = new Controller();
$controller->setPage($page);

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

// Scripts de developpement
if (ENV_MODE == 'dev'){
    $controller->setJs(array(
        JS . 'shortcut.js')
    );
}
$controller->view();