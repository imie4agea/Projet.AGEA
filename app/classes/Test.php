<?php

class Test extends PHPUnit_Extensions_Database_TestCase
{    
    /**
     * Récupère la connexion
     * 
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $pdo = new PDO(DB_DBMS.':host='.DB_SERVER.';dbname='.DB_NAME.';', DB_USER, DB_PASSWORD);
        
        return $this->createDefaultDBConnection($pdo, DB_NAME);
    }

    /**
     * Récupère l'objet DataSet
     * 
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(DATASETS_DIR.ENV_MODE.'-data.xml');
    }
}