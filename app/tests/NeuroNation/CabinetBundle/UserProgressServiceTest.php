<?php

namespace App\Tests\NeuroNation\CabinetBundle;

use App\Entity\UserCourseSession;
use App\NeuroNation\CabinetBundle\Dto\UserCourseSessionDto;
use App\NeuroNation\CabinetBundle\Service\UserProgressService;
use App\Repository\UserCourseSessionRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class UserProgressServiceTest extends TestCase
{
    /**
     * @var ManagerRegistry|MockObject
     */
    private $managerRegistry;
    /**
     * @var UserCourseSessionRepository
     */
    private $userCourseSessionRepository;
    /**
     * @var UserProgressService
     */
    private $userProgressService;

    public function setUp()
    {
        $this->managerRegistry = $this->createMock(
            ManagerRegistry::class
        );
        $this->userCourseSessionRepository = $this->createMock(
            UserCourseSessionRepository::class
        );
        $this->managerRegistry->method('getRepository')
            ->willReturn($this->userCourseSessionRepository);

        $this->userProgressService = new UserProgressService($this->managerRegistry);
    }

    /**
     * @dataProvider getOverallProgressHistoryDataProvider
     * @param $userId
     * @param $limit
     * @param $resultUserCourseSession
     * @param $expectedResultUserCourseSession
     */
    public function testGetOverallProgressHistory(
        $userId,
        $limit,
        $resultUserCourseSession,
        $expectedResultUserCourseSession
    ) {
        $this->userCourseSessionRepository->method('getGetLastSessions')
            ->with($userId, $limit)->willReturn($resultUserCourseSession);

        $result = $this->userProgressService->getOverallProgressHistory($userId, $limit);
        $this->assertEquals($result, $expectedResultUserCourseSession);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getOverallProgressHistoryDataProvider()
    {
        return [
            [
                1,
                10,
                [
                    (new UserCourseSession())
                        ->setScore(10)
                        ->setCreatedAt(new \DateTime('10.11.2020 01:02:03')),
                    (new UserCourseSession())
                        ->setScore(15)
                        ->setCreatedAt(new \DateTime('11.12.2019 02:03:04')),
                ],
                [
                    (new UserCourseSessionDto())
                        ->setScore(10)
                        ->setUnixTimeStamp((new \DateTime('10.11.2020 01:02:03'))->getTimestamp()),
                    (new UserCourseSessionDto())
                        ->setScore(15)
                        ->setUnixTimeStamp((new \DateTime('11.12.2019 02:03:04'))->getTimestamp()),
                ],
            ],
        ];
    }
}
