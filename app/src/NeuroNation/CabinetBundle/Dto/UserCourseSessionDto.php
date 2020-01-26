<?php

namespace App\NeuroNation\CabinetBundle\Dto;

class UserCourseSessionDto
{
    /**
     * @var int
     */
    private $score;

    /**
     * @var int
     */
    private $unixTimeStamp;

    /**
     * @return int
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return $this
     */
    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnixTimeStamp(): ?int
    {
        return $this->unixTimeStamp;
    }

    /**
     * @param int $unixTimeStamp
     * @return $this
     */
    public function setUnixTimeStamp(int $unixTimeStamp): self
    {
        $this->unixTimeStamp = $unixTimeStamp;

        return $this;
    }
}
