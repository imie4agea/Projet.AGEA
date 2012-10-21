<?php

/**
 * @Entity
 */
class Content
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
     * @Column(type="string", length=50, nullable=false)
     */
    protected $title;

    /**
     * @var string
     * 
     * @Column(type="text", nullable=false)
     */
    protected $body;

    /**
     * @var string
     * 
     * @Column(type="datetime", nullable=false)
     */
    protected $datetime;

    /**
     * @var ContentType
     * 
     * @ManyToOne(targetEntity="ContentType", inversedBy="contents")
     */
    protected $content_type;

    /**
     * @var Resource
     * 
     * @ManyToOne(targetEntity="Resource", inversedBy="contents")
     */
    protected $resource;
}
