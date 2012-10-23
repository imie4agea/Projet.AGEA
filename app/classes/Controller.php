<?php

class Controller
{
    private $page;
    private $js;
    private $ieJs;
    private $css;
    private $ieCss;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->js    = array();
        $this->ieJs  = array();
        $this->css   = array();
        $this->ieCss = array();
    }
    
    /**
     * Affiche la page
     */
    public function view()
    {
        $this->_initJs();
        $this->_initCss();

        View::getInstance()->assign('js',      $this->getJs());
        View::getInstance()->assign('ieJs',    $this->getIeJs());
        View::getInstance()->assign('css',     $this->getCss());
        View::getInstance()->assign('ieCss',   $this->getIeCss());
        View::getInstance()->assign('page',    $this->page->toArray());
        
        View::getInstance()->display(TEMPLATES_DIR . 'index.tpl');
    }

    /**
     * Initialise le CSS
     */
    private function _initCss(){
        // CSS de la section
        if (file_exists(CSS . $this->page->getSection()->getName() . '.css')){
            $this->setCss(array(CSS . $this->page->getSection()->getName() . '.css' => 'all'));
        }

        // CSS de la page
        if (file_exists(CSS . $this->page->getName() . '.css')){
            $this->setCss(array(CSS . $this->page->getName() . '.css' => 'all'));
        }
    }

    /**
     * Initialise le JS
     */
    private function _initJs(){
        // JS de la section
        if (file_exists(JS . $this->page->getSection()->getName() . '.js')) {
            $this->setJs(array(JS . $this->page->getSection()->getName() . '.js'));
        }

        // JS de la page
        if (file_exists(JS . $this->page->getName() . '.js')){
            $this->setJs(array(JS . $this->page->getName() . '.js'));
        }
    }
    
    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }
    
    /**
     * Get jS
     *
     * @return array
     */
    public function getJs()
    {
        return $this->js;
    }
    
    /**
     * Get ieJs
     *
     * @return array
     */
    public function getIeJs()
    {
        return $this->ieJs;
    }
    
    /**
     * Get css
     *
     * @return array
     */
    public function getCss()
    {
        return $this->css;
    }
    
    /**
     * Get ieCss
     *
     * @return array
     */
    public function getIeCss()
    {
        return $this->ieCss;
    }
    
    /**
     * Set page
     * 
     * @param  string $page
     * @return Controller
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
    
    /**
     * Set js
     * 
     * @param  array $js
     * @return Controller
     */
    public function setJs($js)
    {
        foreach($js as $file){
            $this->js[] = $file;
        }

        return $this;
    }
    
    /**
     * Set ieJs
     * 
     * @param array $js
     * @return Controller
     */
    public function setIeJs($js)
    {
        foreach($js as $version => $file){
            $this->ieJs[$version] = $file;
        }

        return $this;
    }
    
    /**
     * Set css
     * 
     * @param array $css
     * @return Controller
     */
    public function setCss($css)
    {
        foreach($css as $file => $media){
            $this->css[$file] = $media;
        }

        return $this;
    }
    
    /**
     * Set ieCss
     * 
     * @param array $css
     * @return Controller
     */
    public function setIeCss($css)
    {
        foreach($css as $version => $file){
            $this->ieCss[$version] = $file;
        }

        return $this;
    }
}