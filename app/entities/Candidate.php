<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Candidate extends ArrayEntity
{
    /**
     * Constructeur
     */
    public function __construct()
    {
		$this->departments = new ArrayCollection();
		$this->contracts   = new ArrayCollection();
		$this->careers     = new ArrayCollection();
		$this->skills      = new ArrayCollection();
		$this->resumes     = new ArrayCollection();
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
     * @JoinTable(name="candidates_departments")
     */
    protected $departments;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany(targetEntity="Label", cascade={"persist"})
     * @JoinTable(name="candidates_contracts")
     */
    protected $contracts;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany(targetEntity="Label", cascade={"persist"})
     * @JoinTable(name="candidates_careers")
     */
    protected $careers;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Skill", mappedBy="candidate");
     */
    protected $skills;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Resume", mappedBy="candidate");
     */
    protected $resumes;

    /**
     * @var Label
     * 
     * @ManyToOne(targetEntity="Label", inversedBy="candidates")
     */
    protected $family_situation;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $first_name;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $last_name;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $email;

    /**
     * @var string
     * 
     * @Column(type="string", length=10)
     */
    protected $phone_number;

    /**
     * @var string
     * 
     * @Column(type="string", length=10)
     */
    protected $mobile_number;

    /**
     * @var string
     * 
     * @Column(type="string", length=100)
     */
    protected $address;

    /**
     * @var string
     * 
     * @Column(type="string", length=5)
     */
    protected $postal_code;

    /**
     * @var string
     * 
     * @Column(type="string", length=50)
     */
    protected $city;

    /**
     * @var string
     * 
     * @Column(type="text")
     */
    protected $message;

    /**
     * @var string
     * 
     * @Column(type="text")
     */
    protected $other_experiences;

    /**
     * @var string
     * 
     * @Column(type="text")
     */
    protected $other_skills;
    
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

    public function getContracts() 
    {
        return $this->contracts;
    }

    public function setContracts($contracts) 
    {
        $this->contracts = $contracts;
        
        return $this;
    }

    public function getCareers() 
    {
        return $this->careers;
    }

    public function setCareers($careers) 
    {
        $this->careers = $careers;
        
        return $this;
    }

    public function getSkills() 
    {
        return $this->skills;
    }

    public function setSkills($skills) 
    {
        $this->skills = $skills;
        
        return $this;
    }

    public function getResumes() 
    {
        return $this->resumes;
    }

    public function setResumes($resumes) 
    {
        $this->resumes = $resumes;
        
        return $this;
    }

    public function getFamilySituation() 
    {
        return $this->family_situation;
    }

    public function setFamilySituation($family_situation) 
    {
        $this->family_situation = $family_situation;
        
        return $this;
    }

    public function getFirstName() 
    {
        return $this->first_name;
    }

    public function setFirstName($first_name) 
    {
        $this->first_name = $first_name;
        
        return $this;
    }

    public function getLastName() 
    {
        return $this->last_name;
    }

    public function setLastName($last_name) 
    {
        $this->last_name = $last_name;
        
        return $this;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
        
        return $this;
    }

    public function getPhoneNumber() 
    {
        return $this->phone_number;
    }

    public function setPhoneNumber($phone_number) 
    {
        $this->phone_number = $phone_number;
        
        return $this;
    }

    public function getMobileNumber() 
    {
        return $this->mobile_number;
    }

    public function setMobileNumber($mobile_number) 
    {
        $this->mobile_number = $mobile_number;
        
        return $this;
    }

    public function getAddress() 
    {
        return $this->address;
    }

    public function setAddress($address) 
    {
        $this->address = $address;
        
        return $this;
    }

    public function getPostalCode() 
    {
        return $this->postal_code;
    }

    public function setPostalCode($postal_code) 
    {
        $this->postal_code = $postal_code;
        
        return $this;
    }

    public function getCity() 
    {
        return $this->city;
    }

    public function setCity($city) 
    {
        $this->city = $city;
        
        return $this;
    }

    public function getMessage() 
    {
        return $this->message;
    }

    public function setMessage($message) 
    {
        $this->message = $message;
        
        return $this;
    }

    public function getOtherExperiences() 
    {
        return $this->other_experiences;
    }

    public function setOtherExperiences($other_experiences) 
    {
        $this->other_experiences = $other_experiences;
        
        return $this;
    }

    public function getOtherSkills() 
    {
        return $this->other_skills;
    }

    public function setOtherSkills($other_skills) 
    {
        $this->other_skills = $other_skills;
        
        return $this;
    }
}
