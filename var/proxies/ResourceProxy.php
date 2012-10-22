<?php

namespace App\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ResourceProxy extends \Resource implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getAgencies()
    {
        $this->__load();
        return parent::getAgencies();
    }

    public function setAgencies($agencies)
    {
        $this->__load();
        return parent::setAgencies($agencies);
    }

    public function getContents()
    {
        $this->__load();
        return parent::getContents();
    }

    public function setContents($contents)
    {
        $this->__load();
        return parent::setContents($contents);
    }

    public function getResumes()
    {
        $this->__load();
        return parent::getResumes();
    }

    public function setResumes($resumes)
    {
        $this->__load();
        return parent::setResumes($resumes);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getExternal()
    {
        $this->__load();
        return parent::getExternal();
    }

    public function setExternal($external)
    {
        $this->__load();
        return parent::setExternal($external);
    }

    public function getSlider()
    {
        $this->__load();
        return parent::getSlider();
    }

    public function setSlider($slider)
    {
        $this->__load();
        return parent::setSlider($slider);
    }

    public function toArray($crude = true)
    {
        $this->__load();
        return parent::toArray($crude);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'agencies', 'contents', 'resumes', 'title', 'url', 'image', 'external', 'slider');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}