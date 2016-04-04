<?php

namespace EDiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lessons
 *
 * @ORM\Table(name="lessons", indexes={@ORM\Index(name="teacher_id", columns={"teacher_id"}), @ORM\Index(name="course_id", columns={"course_id"})})
 * @ORM\Entity
 */
class Lessons
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \EDiaryBundle\Entity\Courses
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Courses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

    /**
     * @var \EDiaryBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
     * })
     */
    private $teacher;



    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Lessons
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Lessons
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
     * Set course
     *
     * @param \EDiaryBundle\Entity\Courses $course
     *
     * @return Lessons
     */
    public function setCourse(\EDiaryBundle\Entity\Courses $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \EDiaryBundle\Entity\Courses
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set teacher
     *
     * @param \EDiaryBundle\Entity\Users $teacher
     *
     * @return Lessons
     */
    public function setTeacher(\EDiaryBundle\Entity\Users $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \EDiaryBundle\Entity\Users
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
