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
}
