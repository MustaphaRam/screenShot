<?php

namespace App\Repository;

use App\Entity\ScreenShot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ScreenShot>
 *
 * @method ScreenShot|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScreenShot|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScreenShot[]    findAll()
 * @method ScreenShot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScreenShotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScreenShot::class);
    }

//    /**
//     * @return ScreenShot[] Returns an array of ScreenShot objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ScreenShot
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
