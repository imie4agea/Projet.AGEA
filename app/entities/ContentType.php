<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class ContentType
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
}
