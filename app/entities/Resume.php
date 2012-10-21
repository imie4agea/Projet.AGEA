<?php

/**
 * @Entity
 */
class Resume
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
     * @var string
     * 
     * @Column(type="datetime", nullable=false)
     */
    protected $datetime;

    /**
     * @var string
     * 
     * @Column(type="text")
     */
    protected $evaluation;

    /**
     * @var Candidate
     * 
     * @ManyToOne(targetEntity="Candidate", inversedBy="resumes")
     */
    protected $candidate;

    /**
     * @var Resource
     * 
     * @ManyToOne(targetEntity="Resource", inversedBy="resumes")
     */
    protected $resource;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getDatetime() 
    {
        return $this->datetime;
    }

    public function setDatetime($datetime) 
    {
        $this->datetime = $datetime;
    
        return $this;
    }

    public function getEvaluation() 
    {
        return $this->evaluation;
    }

    public function setEvaluation($evaluation) 
    {
        $this->evaluation = $evaluation;
    
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

    public function getResource() 
    {
        return $this->resource;
    }

    public function setResource($resource) 
    {
        $this->resource = $resource;
    
        return $this;
    }
}
