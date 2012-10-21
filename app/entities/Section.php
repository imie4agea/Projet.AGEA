<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Section
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
    protected $label;

    /**
     * @var int
     * 
     * @Column(type="integer", nullable=false)
     */
    protected $auth_required;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Page", mappedBy="section");
     */
    protected $pages;
}