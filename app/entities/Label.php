<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Label
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
}