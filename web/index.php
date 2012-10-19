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
  SESSION
  ============================================================================== */

session_start();

/* ==============================================================================
  PAGE
  ============================================================================== */

if (isset($_GET['p'])){
    $page = basename(strtolower($_GET['p']));
} else {
    $page = 'accueil';
}

$section   = 'public';
$navigable = true;
$map       = parse_ini_file(CONFIG_DIR . 'ini/pages.ini', true);

foreach ($_map as $_section => $_pages){
    foreach ($_pages as $_page => $_navigable){
        if ($_page == $page){
            $section   = $_section;
            $navigable = $_navigable == 'true' ? true : false;
            break;
        }
    }
}

/* ==============================================================================
  CONTRÔLEURS
  ============================================================================== */

$controller = new Controller();
$controller->setPage($page);
$controller->setSection($section);

/* ==============================================================================
  SCRIPTS
  ============================================================================== */

// Scripts de developpement
if (ENV_MODE == 'dev'){
    $controller->setJs(array(
        JS . 'shortcut.js')
    );
}

// JS de la page
if (file_exists(JS . $controller->getPage() . '.js')) $controller->setJs(array(JS . $controller->getPage() . '.js'));

/* ==============================================================================
  STYLES
  ============================================================================== */

// CSS commun
$controller->setCss(array(
    CSS . 'opensans.css'     => 'all',
    CSS . 'font-awesome.css' => 'all')
);

// CSS pour Internet Explorer
$controller->setIeCss(array(
    'gte IE 7' => CSS . 'lib/font-awesome-ie7.css')
);

/* ==============================================================================
  PROCEDURES
  ============================================================================== */

if (file_exists(CONTROLLERS_DIR . $page . '.php')) include_once CONTROLLERS_DIR . $page . '.php'; 

/* ==============================================================================
  AFFICHAGE
  ============================================================================== */

// Affichage de la vue
$controller->view();