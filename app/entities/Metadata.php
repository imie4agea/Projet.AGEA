<?php

/**
 * @Entity
 */
class Metadata extends ArrayEntity
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

    /**
     * @var boolean
     * 
     * @Column(type="boolean", nullable=false)
     */
    protected $metadata;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    
        return $this;
    }

    public function getLabel() 
    {
        return $this->label;
    }

    public function setLabel($label) 
    {
        $this->label = $label;
    
        return $this;
    }

    public function getValue() 
    {
        return $this->value;
    }

    public function setValue($value) 
    {
        $this->value = $value;
    
        return $this;
    }

    public function getMetadata() 
    {
        return $this->metadata;
    }

    public function setMetadata($metadata) 
    {
        $this->metadata = $metadata;
    
        return $this;
    }
}
