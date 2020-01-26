<?php

namespace App\NeuroNation\CabinetBundle\Controller;

use App\NeuroNation\CabinetBundle\Service\UserProgressService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProgressController extends AbstractController
{
    const COUNT_SESSIONS = 12;

    /**
     * @var UserProgressService
     */
    private $userProgress;

    /**
     * ProgressController constructor.
     * @param UserProgressService $userProgress
     */
    public function __construct(UserProgressService $userProgress)
    {
        $this->userProgress = $userProgress;
    }

    /**
     * @Route("/cabinet/overall-progress-history/{userId}", methods={"GET", "HEAD"})
     * @param int $userId
     * @return JsonResponse
     */
    public function overallProgressHistory(int $userId)
    {
        return $this->json(
            $this->userProgress->getOverallProgressHistory($userId, self::COUNT_SESSIONS)
        );
    }
}
