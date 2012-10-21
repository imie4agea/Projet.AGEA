<?php

/**
 * @Entity
 */
class User
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
    protected $username;

    /**
     * @var string
     * 
     * @Column(type="string", length=50, nullable=false)
     */
    protected $password;

    /**
     * @var int
     * 
     * @Column(type="integer", nullable=false)
     */
    protected $auth_required;
}
