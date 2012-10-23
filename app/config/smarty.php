<?php

require_once LIB_DIR . 'smarty/libs/Smarty.class.php';

/* ==============================================================================
  VARIABLES GENERALES
  ============================================================================== */

View::getInstance()->assign(array(
    'env_mode'  => ENV_MODE,
    'current'   => basename($_SERVER['PHP_SELF']))
);

/* ==============================================================================
  VARIABLES DE DEBUGGAGE
  ============================================================================== */

if (ENV_MODE == 'dev') View::getInstance()->assign(array('smarty_variables' => View::getInstance()->getVariables()));