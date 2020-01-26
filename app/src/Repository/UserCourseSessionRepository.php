<?php

namespace App\Repository;

use App\Entity\UserCourseSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class UserCourseSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCourseSession::class);
    }

    /**
     * @param int $userId
     * @param int $limit
     * @return UserCourseSession[]
     */
    public function getGetLastSessions(int $userId, int $limit)
    {
        return $this->getEntityManager()->createQuery(
<<<SQL
            SELECT s 
            FROM App\Entity\UserCourseSession s
            WHERE s.user = :userId AND s.status = :status
            ORDER BY s.id DESC
SQL
        )
            ->setParameter('status', UserCourseSession::STATUS_COMPLETED)
            ->setParameter('userId', $userId)
            ->setMaxResults($limit)
            ->getResult();
    }

}
