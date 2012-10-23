<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class ContentType extends ArrayEntity
{
    /**
     * Constructeur
     */
    public function __construct()
    {
		$this->contents = new ArrayCollection();
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
     * @OneToMany(targetEntity="Content", mappedBy="content_type");
     */
    protected $contents;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $label;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $picture;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $backup;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $html;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $feed;

    /**
     * @var Page
     * 
     * @ManyToOne(targetEntity="Page", inversedBy="content_types")
     */
    protected $page;

    /**
     * @var Render
     * 
     * @ManyToOne(targetEntity="Render", inversedBy="content_types")
     */
    protected $render;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
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

    public function getLabel() 
    {
        return $this->label;
    }

    public function setLabel($label) 
    {
        $this->label = $label;
    
        return $this;
    }

    public function getPicture() 
    {
        return $this->picture;
    }

    public function setPicture($picture) 
    {
        $this->picture = $picture;
    
        return $this;
    }

    public function getBackup() 
    {
        return $this->backup;
    }

    public function setBackup($backup) 
    {
        $this->backup = $backup;
    
        return $this;
    }

    public function getHtml() 
    {
        return $this->html;
    }

    public function setHtml($html) 
    {
        $this->html = $html;
    
        return $this;
    }

    public function getFeed() 
    {
        return $this->feed;
    }

    public function setFeed($feed) 
    {
        $this->feed = $feed;
    
        return $this;
    }

    public function getPage() 
    {
        return $this->page;
    }

    public function setPage($page) 
    {
        $this->page = $page;
    
        return $this;
    }

    public function getRender() 
    {
        return $this->render;
    }

    public function setRender($render) 
    {
        $this->render = $render;
    
        return $this;
    }
}
