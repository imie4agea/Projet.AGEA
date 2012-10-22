<?php

/**
 * @Entity
 */
class Skill extends ArrayEntity
{
    /**
     * @var int
     * 
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @var Candidate
     * 
     * @ManyToOne(targetEntity="Candidate", inversedBy="skills")
     */
    protected $candidate;

    /**
     * @var Label
     * 
     * @ManyToOne(targetEntity="Label", inversedBy="skills")
     */
    protected $label;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $canonical;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $confirmed;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getCandidate() 
    {
        return $this->candidate;
    }

    public function setCandidate($candidate) 
    {
        $this->candidate = $candidate;
    
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

    public function getCanonical() 
    {
        return $this->canonical;
    }

    public function setCanonical($canonical) 
    {
        $this->canonical = $canonical;
    
        return $this;
    }

    public function getConfirmed() 
    {
        return $this->confirmed;
    }

    public function setConfirmed($confirmed) 
    {
        $this->confirmed = $confirmed;
    
        return $this;
    }
}