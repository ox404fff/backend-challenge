<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCourseSessionRepository")
 * @ORM\Table(name="user_course_sessions")
 */
class UserCourseSession
{
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
}
