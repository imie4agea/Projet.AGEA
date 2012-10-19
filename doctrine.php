<?php

/* ==============================================================================
  CONSTANTES
  ============================================================================== */

define('ROOT_DIR', dirname(__FILE__) . '/');

/* ==============================================================================
  CONFIGURATION
  ============================================================================== */

$helperSet  = null;

require ROOT_DIR . 'app/config/config.php';

foreach ($GLOBALS as $helperSetCandidate) {
    if ($helperSetCandidate instanceof \Symfony\Component\Console\Helper\HelperSet) {
        $helperSet = $helperSetCandidate;
        break;
    }
}

$helperSet = ($helperSet) ?: new \Symfony\Component\Console\Helper\HelperSet();

\Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);