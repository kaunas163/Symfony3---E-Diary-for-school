<?php

namespace EDiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pages", type="string", length=255, nullable=false)
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="courses", type="string", length=255, nullable=false)
     */
    private $courses;

    /**
     * @var string
     *
     * @ORM\Column(name="lessons", type="string", length=255, nullable=false)
     */
    private $lessons;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Roles
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Roles
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
     * Set pages
     *
     * @param string $pages
     *
     * @return Roles
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return string
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set courses
     *
     * @param string $courses
     *
     * @return Roles
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;

        return $this;
    }

    /**
     * Get courses
     *
     * @return string
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Set lessons
     *
     * @param string $lessons
     *
     * @return Roles
     */
    public function setLessons($lessons)
    {
        $this->lessons = $lessons;

        return $this;
    }

    /**
     * Get lessons
     *
     * @return string
     */
    public function getLessons()
    {
        return $this->lessons;
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
