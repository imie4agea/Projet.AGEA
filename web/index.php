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
  SMARTY
  ============================================================================== */

include_once CONFIG_DIR . 'smarty.php';

/* ==============================================================================
  PAGE
  ============================================================================== */

if (isset($_GET['p'])){
    $page = basename(strtolower($_GET['p']));
} else {
    $page = 'accueil';
}

$section    = 'public';
$map        = parse_ini_file(CONFIG_DIR . 'ini/pages.ini', true);
$icons      = parse_ini_file(CONFIG_DIR . 'ini/icons.ini');

foreach ($map as $_section => $_pages){
    foreach ($_pages as $_page => $_title){
        if ($_page == $page){
            $section    = $_section;
            $page_title = $_title;
            break;
        }
    }
}

View::getInstance()->assign('page_template', $section . "/pages/" . $page . ".tpl");
View::getInstance()->assign('section_template', $section . "/" . $section . ".tpl");
View::getInstance()->assign('page_title', $page_title);
View::getInstance()->assign('icons', $icons);
View::getInstance()->assign('map', $map);

/* ==============================================================================
  CONTRÔLEURS
  ============================================================================== */

$controller = new Controller();
$controller->setPage($page);
$controller->setSection($section);

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
if (file_exists(JS . $controller->getPage() . '.js')) $controller->setJs(array(JS . $controller->getPage() . '.js'));

// CSS de la page
if (file_exists(CSS . $controller->getPage() . '.css')) $controller->setCss(array(CSS . $controller->getPage() . '.css' => 'all'));

/* ==============================================================================
  SESSION
  ============================================================================== */

session_start();

/* ==============================================================================
  PROCEDURES
  ============================================================================== */

if (file_exists(CONTROLLERS_DIR . $page . '.php')) include_once CONTROLLERS_DIR . $page . '.php'; 

/* ==============================================================================
  AFFICHAGE
  ============================================================================== */

$controller->view();