<?php

namespace Dues\DuesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DueList
 */
class DueList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

  

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return DueList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var integer
     */
    private $due_list_id;


    /**
     * Get due_list_id
     *
     * @return integer 
     */
    public function getDueListId()
    {
        return $this->due_list_id;
    }
    /**
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     * @return DueList
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    private $user_id;


    /**
     * Set user_id
     *
     * @param string $userId
     * @return DueList
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->user_id;
    }
    
    public function __toString() {
        return $this->name;
    }
   
}
