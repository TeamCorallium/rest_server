<?php

namespace CoralliumServerBundle\Entity;

/**
 * Project
 */
class Project
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

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
     * @var int
     */
    private $maxInvestors;

    /**
     * @var int
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
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
     * Set minimalCost
     *
     * @param float $minimalCost
     *
     * @return Project
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
     * @return Project
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
     * @return Project
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
     * @return Project
     */
    public function setMaxInvestors($maxInvestors)
    {
        $this->maxInvestors = $maxInvestors;

        return $this;
    }

    /**
     * Get maxInvestors
     *
     * @return int
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
     * @return Project
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return int
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
     * @return Project
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
     * @return Project
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subprojects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subprojects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subproject
     *
     * @param \CoralliumServerBundle\Entity\SubProject $subproject
     *
     * @return Project
     */
    public function addSubproject(\CoralliumServerBundle\Entity\SubProject $subproject)
    {
        $this->subprojects[] = $subproject;

        return $this;
    }

    /**
     * Remove subproject
     *
     * @param \CoralliumServerBundle\Entity\SubProject $subproject
     */
    public function removeSubproject(\CoralliumServerBundle\Entity\SubProject $subproject)
    {
        $this->subprojects->removeElement($subproject);
    }

    /**
     * Get subprojects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubprojects()
    {
        return $this->subprojects;
    }
}
