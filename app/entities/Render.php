<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Render
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
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $template;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="ContentType", mappedBy="render");
     */
    protected $content_types;
}
