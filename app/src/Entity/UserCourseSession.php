<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCourseSessionRepository")
 * @ORM\Table(name="user_course_sessions")
 */
class UserCourseSession
{
    const STATUS_STARTED = 1;
    const STATUS_COMPLETED = 2;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", name="user_course_session_id", options={"unsigned":true})
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", name="user_course_id", options={"unsigned":true})
     */
    private $userCourse;

    /**
     * @ORM\Column(type="bigint", name="user_id", options={"unsigned":true})
     */
    private $user;

    /**
     * @ORM\Column(type="smallint", options={"unsigned":true, "default":1})
     */
    private $status;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    private $score;

    /**
     * @ORM\Column(type="datetime", options={"default":"CURRENT_TIMESTAMP()"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", options={"default":"CURRENT_TIMESTAMP()"})
     */
    private $updatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserCourse()
    {
        return $this->userCourse;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
}
