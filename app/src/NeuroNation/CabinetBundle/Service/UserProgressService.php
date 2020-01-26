<?php

namespace App\NeuroNation\CabinetBundle\Service;

use App\Entity\UserCourseSession;
use App\NeuroNation\CabinetBundle\Dto\UserCourseSessionDto;
use Doctrine\Common\Persistence\ManagerRegistry;

class UserProgressService
{
    /**
     * @var ManagerRegistry
     */
    private $managerRegistry;

    public function __construct(ManagerRegistry $registry)
    {
        $this->managerRegistry = $registry;
    }

    /**
     * @param int $userId
     * @param int $countSessions
     * @return UserCourseSessionDto[]
     */
    public function getOverallProgressHistory(int $userId, int $countSessions)
    {
        $result = [];
        $sessions = $this->managerRegistry->getRepository(UserCourseSession::class)
            ->getGetLastSessions($userId, $countSessions);

        foreach ($sessions as $session) {
            $result[] = $this->buildUserSessionDto($session);
        }

        return $result;
    }

    /**
     * @param UserCourseSession $userCourseSession
     * @return UserCourseSessionDto
     */
    private function buildUserSessionDto($userCourseSession)
    {
        $userSessionDto = new UserCourseSessionDto();
        $userSessionDto
            ->setScore($userCourseSession->getScore())
            ->setUnixTimeStamp(
                $userCourseSession->getCreatedAt()->getTimestamp()
            );
        return $userSessionDto;
    }
}
