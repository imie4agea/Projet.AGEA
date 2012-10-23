<?php

/* ==============================================================================
  CONSTANTES
  ============================================================================== */

// Chemins absolus vers les dossiers à la racine

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
define('IMG',  './css/');

/* ==============================================================================
  AUTOLOAD
  ============================================================================== */

require_once LIB_DIR . 'autoloadmanager/AutoloadManager.php';

define('AUTOLOAD_SAVE_PATH', VAR_DIR . 'autoload/');

spl_autoload_register('AutoloadManager::loadClass');

AutoloadManager::setSavePath(AUTOLOAD_SAVE_PATH);
AutoloadManager::addFolder(APP_DIR);
AutoloadManager::addFolder(LIB_DIR);

/* ==============================================================================
  ENVIRONNEMENT
  ============================================================================== */

if (!(defined('ENV_MODE')) || (ENV_MODE != 'dev' && ENV_MODE != 'test' && ENV_MODE != 'preprod' && ENV_MODE != 'prod')){
    if (array_key_exists('SERVER_NAME', $_SERVER)){
      $servername = $_SERVER['SERVER_NAME'];

      if        ($servername     == 'localhost') define('ENV_MODE', 'dev');
      if (substr($servername, 0) == 'staging.')  define('ENV_MODE', 'preprod');
      if (substr($servername, 0) == 'beta.')     define('ENV_MODE', 'preprod');
      if (substr($servername, 0) == 'mobile.')   define('ENV_MODE', 'prod');
      if (substr($servername, 0) == 'api.')      define('ENV_MODE', 'prod');
      if (substr($servername, 0) == 'www.')      define('ENV_MODE', 'prod');
    }

    if (!(defined('ENV_MODE'))) define('ENV_MODE', 'dev');
}

/* ==============================================================================
  DEBUG
  ============================================================================== */

// XDebug
if (ENV_MODE == 'dev'){
    ini_set('xdebug.collect_vars',    'on');
    ini_set('xdebug.collect_params',  '4');
    ini_set('xdebug.dump_globals',    'on');
    ini_set('xdebug.dump.SERVER',     'REQUEST_URI');
    ini_set('xdebug.show_local_vars', 'on');
}

// krumo
if (ENV_MODE == 'dev'){
    require_once LIB_DIR . 'krumo/class.krumo.php';

    $debugArray = array(); 
    $debugCount = 0;
}

// Fonction de debug

/**
 * Utilise krumo pour enregistrer globalement le contenu d'une variable et ses informations
 * 
 * @param  mixed   $variableValue
 * @param  boolean $variableName
 * @return boolean 
 */
function debug($variableValue, $variableName = false)
{    
    if (ENV_MODE == 'dev'){
        global $debugCount;
        global $debugArray;
        
        $backtrace = debug_backtrace();
        $debugName = "called in ".$backtrace[1]["function"]."()";
        $debugName = "[".$debugCount."] ".$debugName;
        
        ($variableName) ? $debugArray[$debugName]["[".$variableName."]"] = $variableValue : $debugArray[$debugName]["[variable]"]= $variableValue;
        
        $debugArray[$debugName]["[backtrace]"] = $backtrace[1];
        
        $debugCount += 1;

        return true;
    } else {
        return false;
    }
}

/* ==============================================================================
  BDD
  ============================================================================== */

$db = parse_ini_file(CONFIG_DIR . 'ini/database.ini', true);
$db = $db[ENV_MODE];

define('DB_DBMS',     $db['dbms']);
define('DB_DRIVER',   $db['driver']);
define('DB_SERVER',   $db['server']);
define('DB_NAME',     $db['name']);
define('DB_USER',     $db['user']);
define('DB_PASSWORD', $db['password']);

/* ==============================================================================
  MAILS
  ============================================================================== */

$mail = parse_ini_file(CONFIG_DIR . 'ini/mail.ini', true);
$mail = $mail[ENV_MODE];

define('TRANSPORT_SECURITY', $mail['transport_security']);
define('TRANSPORT_MAIL',     $mail['transport_mail']);
define('SMTP_HOST',          $mail['smtp_host']);
define('SMTP_PORT',          $mail['smtp_port']);
define('SMTP_USER',          $mail['smtp_user']);
define('SMTP_PASSWORD',      $mail['smtp_password']);

/* ==============================================================================
  DOCTRINE
  ============================================================================== */

include_once CONFIG_DIR . 'doctrine.php';