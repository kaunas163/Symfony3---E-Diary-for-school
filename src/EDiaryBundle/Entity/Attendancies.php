<?php

namespace EDiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendancies
 *
 * @ORM\Table(name="attendancies", indexes={@ORM\Index(name="lesson_id", columns={"lesson_id"}), @ORM\Index(name="student_id", columns={"student_id"})})
 * @ORM\Entity
 */
class Attendancies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mark", type="integer", nullable=true)
     */
    private $mark;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attended", type="boolean", nullable=false)
     */
    private $attended;

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
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     * })
     */
    private $student;

    /**
     * @var \EDiaryBundle\Entity\Lessons
     *
     * @ORM\ManyToOne(targetEntity="EDiaryBundle\Entity\Lessons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lesson_id", referencedColumnName="id")
     * })
     */
    private $lesson;



    /**
     * Set mark
     *
     * @param integer $mark
     *
     * @return Attendancies
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Attendancies
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set attended
     *
     * @param boolean $attended
     *
     * @return Attendancies
     */
    public function setAttended($attended)
    {
        $this->attended = $attended;

        return $this;
    }

    /**
     * Get attended
     *
     * @return boolean
     */
    public function getAttended()
    {
        return $this->attended;
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
     * Set student
     *
     * @param \EDiaryBundle\Entity\Users $student
     *
     * @return Attendancies
     */
    public function setStudent(\EDiaryBundle\Entity\Users $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \EDiaryBundle\Entity\Users
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set lesson
     *
     * @param \EDiaryBundle\Entity\Lessons $lesson
     *
     * @return Attendancies
     */
    public function setLesson(\EDiaryBundle\Entity\Lessons $lesson = null)
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * Get lesson
     *
     * @return \EDiaryBundle\Entity\Lessons
     */
    public function getLesson()
    {
        return $this->lesson;
    }
}
