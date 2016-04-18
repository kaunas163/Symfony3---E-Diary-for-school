<?php

namespace EDiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="username", columns={"username"}), @ORM\Index(name="child_username", columns={"child_username"})})
 * @ORM\Entity
 */
class Users extends BaseUser
{
    /**
     * @var \EDiaryBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child", referencedColumnName="id")
     * })
     */
    private $child;

    public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_USER');
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set child
     *
     * @param \EDiaryBundle\Entity\Users $child
     *
     * @return Users
     */
    public function setChild(\EDiaryBundle\Entity\Users $child = null)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return \EDiaryBundle\Entity\Users
     */
    public function getChild()
    {
        return $this->child;
    }

//    public function __toString() {
//        return $this->username;
//    }
}
