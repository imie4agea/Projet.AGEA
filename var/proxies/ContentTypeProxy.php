<?php

namespace App\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ContentTypeProxy extends \ContentType implements \Doctrine\ORM\Proxy\Proxy
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

    public function getLabel()
    {
        $this->__load();
        return parent::getLabel();
    }

    public function setLabel($label)
    {
        $this->__load();
        return parent::setLabel($label);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function setPicture($picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getBackup()
    {
        $this->__load();
        return parent::getBackup();
    }

    public function setBackup($backup)
    {
        $this->__load();
        return parent::setBackup($backup);
    }

    public function getHtml()
    {
        $this->__load();
        return parent::getHtml();
    }

    public function setHtml($html)
    {
        $this->__load();
        return parent::setHtml($html);
    }

    public function getFeed()
    {
        $this->__load();
        return parent::getFeed();
    }

    public function setFeed($feed)
    {
        $this->__load();
        return parent::setFeed($feed);
    }

    public function getPage()
    {
        $this->__load();
        return parent::getPage();
    }

    public function setPage($page)
    {
        $this->__load();
        return parent::setPage($page);
    }

    public function getRender()
    {
        $this->__load();
        return parent::getRender();
    }

    public function setRender($render)
    {
        $this->__load();
        return parent::setRender($render);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'contents', 'label', 'picture', 'html', 'feed', 'page', 'render');
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
