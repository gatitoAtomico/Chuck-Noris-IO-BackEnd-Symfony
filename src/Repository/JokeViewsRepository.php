<?php

namespace App\Repository;

use App\Entity\JokeViews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JokeViews|null find($id, $lockMode = null, $lockVersion = null)
 * @method JokeViews|null findOneBy(array $criteria, array $orderBy = null)
 * @method JokeViews[]    findAll()
 * @method JokeViews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JokeViewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JokeViews::class);
    }

    // /**
    //  * @return JokeViews[] Returns an array of JokeViews objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JokeViews
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
