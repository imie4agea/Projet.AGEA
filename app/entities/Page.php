<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Page
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
    protected $name;

    /**
     * @var Section
     * 
     * @ManyToOne(targetEntity="Section", inversedBy="pages")
     */
    protected $section;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="ContentType", mappedBy="page");
     */
    protected $content_types;
}
