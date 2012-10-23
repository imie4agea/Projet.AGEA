<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Agency extends ArrayEntity
{
    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->departments = new ArrayCollection();
    }

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
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getDepartments() 
    {
        return $this->departments;
    }

    public function setDepartments($departments) 
    {
        $this->departments = $departments;
    
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

    public function getDepartment() 
    {
        return $this->department;
    }

    public function setDepartment($department) 
    {
        $this->department = $department;
    
        return $this;
    }

    public function getLogo() 
    {
        return $this->logo;
    }

    public function setLogo($logo) 
    {
        $this->logo = $logo;
    
        return $this;
    }
}