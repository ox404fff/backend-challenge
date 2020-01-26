<?php

namespace App\NeuroNation\CabinetBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProgressController
{
    /**
     * @Route("/cabinet/overall-progress-history")
     */
    public function overallProgressHistory()
    {
        return new JsonResponse([1]);
    }
}