<?php

class Controller
{
    private $page;
    private $section;
    private $js;
    private $ieJs;
    private $css;
    private $ieCss;
    private $less;
    private $ieLess;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->js     = array();
        $this->ieJs   = array();
        $this->css    = array();
        $this->ieCss  = array();
        $this->less   = array();
        $this->ieLess = array();
    }
    
    /**
     * Affiche la page
     */
    public function view()
    {
        View::getInstance()->assign('js',      $this->getJs());
        View::getInstance()->assign('ieJs',    $this->getIeJs());
        View::getInstance()->assign('css',     $this->getCss());
        View::getInstance()->assign('ieCss',   $this->getIeCss());
        View::getInstance()->assign('less',    $this->getLess());
        View::getInstance()->assign('ieLess',  $this->getIeLess());
        View::getInstance()->assign('page',    $this->page);
        View::getInstance()->assign('section', $this->section);
        
        View::getInstance()->display(TEMPLATES_DIR . 'index.tpl');
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
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
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
     * Get less
     *
     * @return array
     */
    public function getLess()
    {
        return $this->less;
    }
    
    /**
     * Get ieLess
     *
     * @return array
     */
    public function getIeLess()
    {
        return $this->ieLess;
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
     * Set section
     * 
     * @param  string $section
     * @return Controller
     */
    public function setSection($section)
    {
        $this->section = $section;

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
    
    /**
     * Set less
     * 
     * @param array $less
     * @return Controller
     */
    public function setLess($less)
    {
        foreach($less as $file => $media){
            $this->less[$file] = $media;
        }

        return $this;
    }
    
    /**
     * Set ieLess
     * 
     * @param array $less
     * @return Controller
     */
    public function setIeLess($less)
    {
        foreach($less as $version => $file){
            $this->ieLess[$version] = $file;
        }

        return $this;
    }
}