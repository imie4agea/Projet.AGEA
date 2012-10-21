<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Label
{
    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->agencies   = new ArrayCollection();
        $this->candidates = new ArrayCollection();
        $this->skills     = new ArrayCollection();
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
     * @var LabelType
     * 
     * @ManyToOne(targetEntity="LabelType", inversedBy="labels")
     */
    protected $label_type;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Agency", mappedBy="department");
     */
    protected $agencies;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Candidate", mappedBy="family_situation");
     */
    protected $candidates;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Skill", mappedBy="label");
     */
    protected $skills;
    
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

    public function getLabelType() 
    {
        return $this->label_type;
    }

    public function setLabelType($label_type) 
    {
        $this->label_type = $label_type;
    
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

    public function getCandidates() 
    {
        return $this->candidates;
    }

    public function setCandidates($candidates) 
    {
        $this->candidates = $candidates;
    
        return $this;
    }

    public function getSkills() 
    {
        return $this->skills;
    }

    public function setSkills($skills) 
    {
        $this->skills = $skills;
    
        return $this;
    }
}