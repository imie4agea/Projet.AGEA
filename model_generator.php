<?php


define('ROOT_DIR', dirname(__FILE__) . '/');
define('APP_DIR', ROOT_DIR . 'app/');
define('BIN_DIR', ROOT_DIR . 'bin/');
define('LIB_DIR', ROOT_DIR . 'lib/');
define('VAR_DIR', ROOT_DIR . 'var/');
define('WEB_DIR', ROOT_DIR . 'web/');

// Chemins absolus vers les dossiers de l'application

define('CLASSES_DIR',     APP_DIR . 'classes/');
define('CONFIG_DIR',      APP_DIR . 'config/');
define('CONTROLLERS_DIR', APP_DIR . 'controllers/');
define('ENTITIES_DIR',    APP_DIR . 'entities/');
define('TEMPLATES_DIR',   APP_DIR . 'templates/');
define('TESTS_DIR',       APP_DIR . 'tests/');

// Chemins relatifs vers les dossiers web

define('CSS',  './css/');
define('FONT', './font/');
define('JS',   './js/');
define('IMG',  './css/');;

require_once LIB_DIR . 'autoloadmanager/AutoloadManager.php';

define('AUTOLOAD_SAVE_PATH', sys_get_temp_dir());

spl_autoload_register('AutoloadManager::loadClass');

AutoloadManager::setSavePath(AUTOLOAD_SAVE_PATH);
AutoloadManager::addFolder(APP_DIR);

$var = new ArrayEntity();
$var = new Controller();
$var = new Test();
$var = new View();
$var = new Agency();
$var = new Candidate();
$var = new Content();
$var = new ContentType();
$var = new Label();
$var = new LabelType();
$var = new Metadata();
$var = new Page();
$var = new Render();
$var = new Resource();
$var = new Resume();
$var = new Section();
$var = new Skill();
$var = new User();
