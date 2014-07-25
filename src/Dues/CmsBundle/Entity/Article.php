<?php

namespace Dues\CmsBundle\Entity;

use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article {
    
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text",length=48)
     */
    public $title;
    
    /**
     * @ORM\Column(type="string")
     */
    public $content;
    
    
    /**
     * @ManyToOne(targetEntity="Category")
     */
    public $category;
    
    protected $author_id;
    
    function getId() {
        return $this->id;
    }
    
    function getTitle() {
     return $this->title;
        
    }
    
    function getContent() {
        return $this->content;
    }
    
    
    function getCategory() {
        return $this->category;
    }
    
    function __toString() {
      return $this->getTitle();   
    }
   
}