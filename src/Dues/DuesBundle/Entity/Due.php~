<?php

namespace Dues\DuesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Due
 */
class Due
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var integer
     */
    private $holder_id;

    /**
     * @var integer
     */
    private $debtor_id;

    /**
     * @var \DateTime
     */
    private $start_date;

    /**
     * @var \DateTime
     */
    private $intrest_start;

    /**
     * @var float
     */
    private $intrest_rate;

    /**
     * @var string
     */
    private $due_list_id;


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
     * Set amount
     *
     * @param float $amount
     * @return Due
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set holder_id
     *
     * @param integer $holderId
     * @return Due
     */
    public function setHolderId($holderId)
    {
        $this->holder_id = $holderId;

        return $this;
    }

    /**
     * Get holder_id
     *
     * @return integer 
     */
    public function getHolderId()
    {
        return $this->holder_id;
    }

    /**
     * Set debtor_id
     *
     * @param integer $debtorId
     * @return Due
     */
    public function setDebtorId($debtorId)
    {
        $this->debtor_id = $debtorId;

        return $this;
    }

    /**
     * Get debtor_id
     *
     * @return integer 
     */
    public function getDebtorId()
    {
        return $this->debtor_id;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Due
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set intrest_start
     *
     * @param \DateTime $intrestStart
     * @return Due
     */
    public function setIntrestStart($intrestStart)
    {
        $this->intrest_start = $intrestStart;

        return $this;
    }

    /**
     * Get intrest_start
     *
     * @return \DateTime 
     */
    public function getIntrestStart()
    {
        return $this->intrest_start;
    }

    /**
     * Set intrest_rate
     *
     * @param float $intrestRate
     * @return Due
     */
    public function setIntrestRate($intrestRate)
    {
        $this->intrest_rate = $intrestRate;

        return $this;
    }

    /**
     * Get intrest_rate
     *
     * @return float 
     */
    public function getIntrestRate()
    {
        return $this->intrest_rate;
    }

    /**
     * Set due_list_id
     *
     * @param string $dueListId
     * @return Due
     */
    public function setDueListId($dueListId)
    {
        $this->due_list_id = $dueListId;

        return $this;
    }

    /**
     * Get due_list_id
     *
     * @return string 
     */
    public function getDueListId()
    {
        return $this->due_list_id;
    }
    /**
     * @var \Dues\DuesBundle\Entity\User
     */
    private $holder_id_fk;


    /**
     * Set holder_id_fk
     *
     * @param \Dues\DuesBundle\Entity\User $holderIdFk
     * @return Due
     */
    public function setHolderIdFk(\Dues\DuesBundle\Entity\User $holderIdFk = null)
    {
        $this->holder_id_fk = $holderIdFk;

        return $this;
    }

    /**
     * Get holder_id_fk
     *
     * @return \Dues\DuesBundle\Entity\User 
     */
    public function getHolderIdFk()
    {
        return $this->holder_id_fk;
    }
    /**
     * @var string
     */
    private $title;


    /**
     * Set title
     *
     * @param string $title
     * @return Due
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}
