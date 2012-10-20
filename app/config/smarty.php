<?php

require_once LIB_DIR . 'smarty/Smarty.php';

/* ==============================================================================
  VARIABLES GENERALES
  ============================================================================== */

View::getInstance()->assign(array(
    'title'     => TITLE,
    'site_name' => SITE_NAME,
    'site_url'  => SITE_URL,
    'domain'    => DOMAIN,
    'env_mode'  => ENV_MODE,
    'current'   => basename($_SERVER['PHP_SELF']))
);

/* ==============================================================================
  VARIABLES DE DEBUGGAGE
  ============================================================================== */

if (ENV_MODE == 'dev') View::getInstance()->assign(array('smarty_variables' => View::getInstance()->getVariables()));

/* ==============================================================================
  VARIABLES DE TEST
  ============================================================================== */

if (ENV_MODE == 'dev') View::getInstance()->assign(parse_ini_file(CONFIG_DIR.'ini/tmp.ini'));