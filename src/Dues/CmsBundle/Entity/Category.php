<?php

namespace Dues\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text",length=48)
     */
    protected $name;
    
    
    public function getName() {
        return $this->name;
    }
    
    public function getId() {
        return $this->id;
    }
  
}