<?php

namespace Dues\DuesBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="due_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="display_name",type="text", length=128, options={"nullable": True})
     */
    protected $display_name;

    
    public function __construct()
    {
        parent::__construct();
        
    }
     public function getDisplayName() {
         $this->getDisplay_Name();
     }
    public function getDisplay_Name() {
        return $this->display_name;
    }
    
    function setDisplayName($dn) {
        $this->display_name=$dn;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
