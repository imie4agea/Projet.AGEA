<?php

class View extends Smarty
{
    const CACHE_DIR   = 'cache_dir'; 
    const CONFIG_DIR  = 'config_dir';
    const COMPILE_DIR = 'compile_dir';
    const CACHE       = false;

    static private $_instance;
    
    /**
     * Constructeur
     */
    public function __construct()
    {
        // Nouvelle instance Smarty
        parent::__construct();

        // Spécifie le repertoire des templates
        $this->template_dir = TEMPLATES_DIR;

        $path_tmp = AUTOLOAD_SAVE_PATH;

        $tmp = array(self::CACHE_DIR, self::CONFIG_DIR, self::COMPILE_DIR);
        
        // Boucle les paramètres
        foreach($tmp as $dir){
            $this->$dir = $path_tmp;
        }	

        // Comportement du cache
        $this->caching = self::CACHE;
    }
    
    /**
     * Récupère l'instance de vue
     * 
     * @return View $_instance
     */
    static public function getInstance()
    {
        if(!isset(self::$_instance)) self::$_instance = new self();

        return self::$_instance;
    }
    
     /**
     * Récupère les variables de vue
     */
    public function getVariables()
    {
        return $this->_tpl_vars;
    }
}
