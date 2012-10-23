<?php

use Doctrine\ORM\Tools\Setup, Doctrine\ORM\EntityManager, Doctrine\ORM\Configuration;

/* ==============================================================================
  BDD
  ============================================================================== */

/**
 * Renvoie les paramètres de la BDD
 * 
 * @return array
 */
function getDatabase()
{
    return array(
        'driver'   => DB_DRIVER,
        'user'     => DB_USER,
        'password' => DB_PASSWORD,
        'dbname'   => DB_NAME
    );
}

/* ==============================================================================
  CACHE
  ============================================================================== */

/**
 * Renvoie une instance du cache approprié à l'environnement
 * 
 * @return Cache
 */
function getCache()
{
    if (ENV_MODE == 'dev'){
        return new \Doctrine\Common\Cache\ArrayCache;
    } else {
        return new \Doctrine\Common\Cache\ApcCache;
    }
}

/* ==============================================================================
  CONFIGURATION
  ============================================================================== */

/**
 * Renvoie les informations de configuration de Doctrine
 * 
 * @return array
 */
function getConfig()
{
    $cache  = getCache();
    $config = new Configuration;
    $config->setMetadataCacheImpl($cache);
    $driverImpl = $config->newDefaultAnnotationDriver(APP_DIR . 'entities');
    $config->setMetadataDriverImpl($driverImpl);
    $config->setQueryCacheImpl($cache);
    $config->setProxyDir(VAR_DIR . 'proxies/');
    $config->setProxyNamespace('App\Proxies');
    $config->setAutoGenerateProxyClasses(ENV_MODE == 'dev');
    
    return $config;
}

/**
 * Renvoie une instance de l'EventManager
 * 
 * @return Doctrine\Common\EventManager()
 */
function getEventManager()
{
    return new Doctrine\Common\EventManager();
}

/**
 * Renvoie une instance de l'EntityManager
 * 
 * @return EntityManager
 */
function getEntityManager()
{
    return EntityManager::create(getDatabase(), getConfig(), getEventManager());
}

$em = getEntityManager();

/* ==============================================================================
  CONSOLE
  ============================================================================== */

if (defined('DOCTRINE_MODE') && DOCTRINE_MODE == true){
    $helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
        'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
        'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
    ));
}