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
    protected $title;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $content;
    
    
    /**
     * @ManyToOne(targetEntity="Category")
     */
    protected $category;
    
    protected $author_id;
}