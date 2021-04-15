<?php

namespace App\Repository;

use App\Entity\CategoriesViews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoriesViews|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesViews|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesViews[]    findAll()
 * @method CategoriesViews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesViewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesViews::class);
    }

    // /**
    //  * @return CategoriesViews[] Returns an array of CategoriesViews objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesViews
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
