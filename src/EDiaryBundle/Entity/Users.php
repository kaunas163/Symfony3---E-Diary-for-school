<?php

namespace EDiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="role_id", columns={"role_id"}), @ORM\Index(name="username", columns={"username"}), @ORM\Index(name="child_username", columns={"child_username"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \EDiaryBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child_username", referencedColumnName="username")
     * })
     */
    private $childUsername;

    /**
     * @var \EDiaryBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;



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
     * Set childUsername
     *
     * @param \EDiaryBundle\Entity\Users $childUsername
     *
     * @return Users
     */
    public function setChildUsername(\EDiaryBundle\Entity\Users $childUsername = null)
    {
        $this->childUsername = $childUsername;

        return $this;
    }

    /**
     * Get childUsername
     *
     * @return \EDiaryBundle\Entity\Users
     */
    public function getChildUsername()
    {
        return $this->childUsername;
    }

    /**
     * Set role
     *
     * @param \EDiaryBundle\Entity\Roles $role
     *
     * @return Users
     */
    public function setRole(\EDiaryBundle\Entity\Roles $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \EDiaryBundle\Entity\Roles
     */
    public function getRole()
    {
        return $this->role;
    }
}
