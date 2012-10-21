<?php

/**
 * @Entity
 */
class Agency
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
     * @ManyToMany(targetEntity="Label", cascade={"persist"})
     * @JoinTable(name="agencies_departments")
     */
    protected $departments;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $name;

    /**
     * @var Label
     * 
     * @ManyToOne(targetEntity="Label", inversedBy="agencies")
     */
    protected $department;

    /**
     * @var Resource
     * 
     * @ManyToOne(targetEntity="Resource", inversedBy="agencies")
     */
    protected $logo;
}