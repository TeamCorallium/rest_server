<?php

namespace CoralliumServerBundle\Entity;

/**
 * Subproject
 */
class Subproject
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \CoralliumServerBundle\Entity\User $user
     *
     * @return Subproject
     */
    public function addUser(\CoralliumServerBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \CoralliumServerBundle\Entity\User $user
     */
    public function removeUser(\CoralliumServerBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var float
     */
    private $minimalCost;

    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \DateTime
     */
    private $toDate;

    /**
     * @var integer
     */
    private $maxInvestors;

    /**
     * @var integer
     */
    private $stage;

    /**
     * @var float
     */
    private $revenueShare;

    /**
     * @var string
     */
    private $geotag;


    /**
     * Set minimalCost
     *
     * @param float $minimalCost
     *
     * @return Subproject
     */
    public function setMinimalCost($minimalCost)
    {
        $this->minimalCost = $minimalCost;

        return $this;
    }

    /**
     * Get minimalCost
     *
     * @return float
     */
    public function getMinimalCost()
    {
        return $this->minimalCost;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     *
     * @return Subproject
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     *
     * @return Subproject
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set maxInvestors
     *
     * @param integer $maxInvestors
     *
     * @return Subproject
     */
    public function setMaxInvestors($maxInvestors)
    {
        $this->maxInvestors = $maxInvestors;

        return $this;
    }

    /**
     * Get maxInvestors
     *
     * @return integer
     */
    public function getMaxInvestors()
    {
        return $this->maxInvestors;
    }

    /**
     * Set stage
     *
     * @param integer $stage
     *
     * @return Subproject
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return integer
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set revenueShare
     *
     * @param float $revenueShare
     *
     * @return Subproject
     */
    public function setRevenueShare($revenueShare)
    {
        $this->revenueShare = $revenueShare;

        return $this;
    }

    /**
     * Get revenueShare
     *
     * @return float
     */
    public function getRevenueShare()
    {
        return $this->revenueShare;
    }

    /**
     * Set geotag
     *
     * @param string $geotag
     *
     * @return Subproject
     */
    public function setGeotag($geotag)
    {
        $this->geotag = $geotag;

        return $this;
    }

    /**
     * Get geotag
     *
     * @return string
     */
    public function getGeotag()
    {
        return $this->geotag;
    }
    /**
     * @var \CoralliumServerBundle\Entity\Project
     */
    private $project;


    /**
     * Set project
     *
     * @param \CoralliumServerBundle\Entity\Project $project
     *
     * @return Subproject
     */
    public function setProject(\CoralliumServerBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \CoralliumServerBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }
}
