<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class LabelType
{
    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->labels = new ArrayCollection();
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
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Label", mappedBy="label_type");
     */
    protected $labels;
    
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

    public function getLabels() 
    {
        return $this->labels;
    }

    public function setLabels($labels) 
    {
        $this->labels = $labels;
    
        return $this;
    }
}