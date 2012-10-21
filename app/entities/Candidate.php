<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Candidate
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
     * @JoinTable(name="candidates_skills")
     */
    protected $skills;

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
}
