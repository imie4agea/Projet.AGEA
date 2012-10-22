<?php

/**
 * @Entity
 */
class User extends ArrayEntity
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
    protected $auth_level;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getUsername() 
    {
        return $this->username;
    }

    public function setUsername($username) 
    {
        $this->username = $username;
    
        return $this;
    }

    public function getPassword() 
    {
        return $this->password;
    }

    public function setPassword($password) 
    {
        $this->password = $password;
    
        return $this;
    }

    public function getAuthLevel() 
    {
        return $this->auth_level;
    }

    public function setAuthLevel($auth_level) 
    {
        $this->auth_level = $auth_level;
    
        return $this;
    }
}