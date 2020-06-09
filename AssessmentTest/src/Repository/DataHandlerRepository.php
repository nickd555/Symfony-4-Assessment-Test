<?php

namespace App\Repository;

use App\Entity\DataHandler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataHandler|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataHandler|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataHandler[]    findAll()
 * @method DataHandler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataHandlerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataHandler::class);
    }

    // /**
    //  * @return DataHandler[] Returns an array of DataHandler objects
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
    public function findOneBySomeField($value): ?DataHandler
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
