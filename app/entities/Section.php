<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Section
{
    /**
     * Constructeur
     */
    public function __construct()
    {
		$this->pages = new ArrayCollection();
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
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $name;

    /**
     * @var int
     * 
     * @Column(type="integer", nullable=false)
     */
    protected $auth_required;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Page", mappedBy="section");
     */
    protected $pages;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    
        return $this;
    }

    public function getAuthRequired() 
    {
        return $this->auth_required;
    }

    public function setAuthRequired($auth_required) 
    {
        $this->auth_required = $auth_required;
    
        return $this;
    }

    public function getPages() 
    {
        return $this->pages;
    }

    public function setPages($pages) 
    {
        $this->pages = $pages;
    
        return $this;
    }
}