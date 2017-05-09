<?php

namespace CoralliumServerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

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
    private $projects;


    /**
     * Add project
     *
     * @param \CoralliumServerBundle\Entity\Subproject $project
     *
     * @return User
     */
    public function addProject(\CoralliumServerBundle\Entity\Subproject $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \CoralliumServerBundle\Entity\Subproject $project
     */
    public function removeProject(\CoralliumServerBundle\Entity\Subproject $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
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
     * @return User
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
