<?php

/**
 * @Entity
 */
class Content extends ArrayEntity
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
    protected $title;

    /**
     * @var string
     * 
     * @Column(type="text", nullable=false)
     */
    protected $body;

    /**
     * @var String
     * 
     * @Column(type="string",length=100, nullable=false)
     */
    protected $datetime;

    /**
     * @var ContentType
     * 
     * @ManyToOne(targetEntity="ContentType", inversedBy="contents")
     */
    protected $content_type;

    /**
     * @var Resource
     * 
     * @ManyToOne(targetEntity="Resource", inversedBy="contents")
     */
    protected $resource;
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    
        return $this;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    
        return $this;
    }

    public function getBody() 
    {
        return $this->body;
    }

    public function setBody($body) 
    {
        $this->body = $body;
    
        return $this;
    }

    public function getDatetime() 
    {
        return $this->datetime;
    }

    public function setDatetime($datetime) 
    {
        $this->datetime = $datetime;
    
        return $this;
    }

    public function getContentType() 
    {
        return $this->content_type;
    }

    public function setContentType($content_type) 
    {
        $this->content_type = $content_type;
    
        return $this;
    }

    public function getResource() 
    {
        return $this->resource;
    }

    public function setResource($resource) 
    {
        $this->resource = $resource;
    
        return $this;
    }
}
