<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class LabelType
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
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Label", mappedBy="label_type");
     */
    protected $labels;
}