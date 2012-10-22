<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Resource extends ArrayEntity
{
    /**
     * Constructeur
     */
    public function __construct()
    {
		$this->agencies = new ArrayCollection();
		$this->contents = new ArrayCollection();
		$this->resumes  = new ArrayCollection();
    }

    /**
     * @var int
     * 
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Agency", mappedBy="logo");
     */
    protected $agencies;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Content", mappedBy="resource");
     */
    protected $contents;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Resume", mappedBy="resource");
     */
    protected $resumes;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $title;

    /**
     * @var string
     * 
     * @Column(type="string", length=200, nullable=false)
     */
    protected $url;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $image;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $external;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $slider;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getAgencies() 
    {
        return $this->agencies;
    }

    public function setAgencies($agencies) 
    {
        $this->agencies = $agencies;
    
        return $this;
    }

    public function getContents() 
    {
        return $this->contents;
    }

    public function setContents($contents) 
    {
        $this->contents = $contents;
    
        return $this;
    }

    public function getResumes() 
    {
        return $this->resumes;
    }

    public function setResumes($resumes) 
    {
        $this->resumes = $resumes;
    
        return $this;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    
        return $this;
    }

    public function getUrl() 
    {
        return $this->url;
    }

    public function setUrl($url) 
    {
        $this->url = $url;
    
        return $this;
    }

    public function getImage() 
    {
        return $this->image;
    }

    public function setImage($image) 
    {
        $this->image = $image;
    
        return $this;
    }

    public function getExternal() 
    {
        return $this->external;
    }

    public function setExternal($external) 
    {
        $this->external = $external;
    
        return $this;
    }

    public function getSlider() 
    {
        return $this->slider;
    }

    public function setSlider($slider) 
    {
        $this->slider = $slider;
    
        return $this;
    }
}
