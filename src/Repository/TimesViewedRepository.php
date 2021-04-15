<?php

namespace App\Repository;

use App\Entity\TimesViewed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TimesViewed|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimesViewed|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimesViewed[]    findAll()
 * @method TimesViewed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimesViewedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimesViewed::class);
    }

    // /**
    //  * @return TimesViewed[] Returns an array of TimesViewed objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimesViewed
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
