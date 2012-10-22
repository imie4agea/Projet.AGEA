<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Render extends ArrayEntity
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
     * @Column(type="string", length=50, nullable=false)
     */
    protected $label;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $template;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="ContentType", mappedBy="render");
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

    public function getLabel() 
    {
        return $this->label;
    }

    public function setLabel($label) 
    {
        $this->label = $label;
    
        return $this;
    }

    public function getTemplate() 
    {
        return $this->template;
    }

    public function setTemplate($template) 
    {
        $this->template = $template;
    
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
