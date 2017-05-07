<?php

namespace CoralliumServerBundle\Entity;

/**
 * Profile
 */
class Profile
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
     * @var string
     */
    private $identity;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var \CoralliumServerBundle\Entity\User
     */
    private $user;

    /**
     * @var \CoralliumServerBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interests;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->interests = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Profile
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
     * Set identity
     *
     * @param string $identity
     *
     * @return Profile
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Profile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set user
     *
     * @param \CoralliumServerBundle\Entity\User $user
     *
     * @return Profile
     */
    public function setUser(\CoralliumServerBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CoralliumServerBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set address
     *
     * @param \CoralliumServerBundle\Entity\Address $address
     *
     * @return Profile
     */
    public function setAddress(\CoralliumServerBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \CoralliumServerBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add interest
     *
     * @param \CoralliumServerBundle\Entity\Interest $interest
     *
     * @return Profile
     */
    public function addInterest(\CoralliumServerBundle\Entity\Interest $interest)
    {
        $this->interests[] = $interest;

        return $this;
    }

    /**
     * Remove interest
     *
     * @param \CoralliumServerBundle\Entity\Interest $interest
     */
    public function removeInterest(\CoralliumServerBundle\Entity\Interest $interest)
    {
        $this->interests->removeElement($interest);
    }

    /**
     * Get interests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterests()
    {
        return $this->interests;
    }
}
