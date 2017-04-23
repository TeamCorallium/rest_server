<?php

namespace CoralliumServerBundle\Entity;

/**
 * WorkExperience
 */
class WorkExperience
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $previous;

    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \DateTime
     */
    private $toDate;


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
     * Set previous
     *
     * @param string $previous
     *
     * @return WorkExperience
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;

        return $this;
    }

    /**
     * Get previous
     *
     * @return string
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     *
     * @return WorkExperience
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
     * @return WorkExperience
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
     * @var \CoralliumServerBundle\Entity\Skill
     */
    private $skill;


    /**
     * Set skill
     *
     * @param \CoralliumServerBundle\Entity\Skill $skill
     *
     * @return WorkExperience
     */
    public function setSkill(\CoralliumServerBundle\Entity\Skill $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \CoralliumServerBundle\Entity\Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }
    /**
     * @var \CoralliumServerBundle\Entity\Profile
     */
    private $profile;


    /**
     * Set profile
     *
     * @param \CoralliumServerBundle\Entity\Profile $profile
     *
     * @return WorkExperience
     */
    public function setProfile(\CoralliumServerBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \CoralliumServerBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
