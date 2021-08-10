<?php

namespace App\Repository;

use App\Entity\Defaults;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Defaults|null find($id, $lockMode = null, $lockVersion = null)
 * @method Defaults|null findOneBy(array $criteria, array $orderBy = null)
 * @method Defaults[]    findAll()
 * @method Defaults[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DefaultsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Defaults::class);
    }

    // /**
    //  * @return Defaults[] Returns an array of Defaults objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Defaults
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
