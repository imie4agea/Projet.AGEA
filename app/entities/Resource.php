<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Resource
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
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Agency", mappedBy="logo");
     */
    protected $agencies;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Content", mappedBy="resource");
     */
    protected $contents;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Resume", mappedBy="resource");
     */
    protected $resumes;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $title;

    /**
     * @var string
     * 
     * @Column(type="string", length=200, nullable=false)
     */
    protected $url;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $image;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $external;

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $slider;
}
