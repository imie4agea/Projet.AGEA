<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Page extends ArrayEntity
{
    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->content_types = new ArrayCollection();
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
     * @Column(type="string", length=50, nullable=false, unique=true)
     */
    protected $name;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $title;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $icon;

    /**
     * @var Section
     * 
     * @ManyToOne(targetEntity="Section", inversedBy="pages")
     */
    protected $section;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="ContentType", mappedBy="page");
     */
    protected $content_types;
    
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

    public function getTitle() 
    {
        return $this->title;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    
        return $this;
    }

    public function getIcon() 
    {
        return $this->icon;
    }

    public function setIcon($icon) 
    {
        $this->icon = $icon;
    
        return $this;
    }

    public function getSection() 
    {
        return $this->section;
    }

    public function setSection($section) 
    {
        $this->section = $section;
    
        return $this;
    }

    public function getContentTypes() 
    {
        return $this->content_types;
    }

    public function setContentTypes($content_types) 
    {
        $this->content_types = $content_types;
    
        return $this;
    }
}
