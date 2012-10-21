<?php

/**
 * @Entity
 */
class Metadata
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
     * @Column(type="text", nullable=false)
     */
    protected $value;
}
