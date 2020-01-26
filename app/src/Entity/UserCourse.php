<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCourseRepository")
 */
class UserCourse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="bigint", name="user_cource_id", options={"unsigned":true})
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", options={"unsigned":true})
     */
    private $courseId;

    /**
     * @ORM\Column(type="bigint", options={"unsigned":true})
     */
    private $userId;

    /**
     * @ORM\Column(type="datetime", options={"default":"CURRENT_TIMESTAMP()"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", options={"default":"CURRENT_TIMESTAMP()"})
     */
    private $updatedAt;
}
