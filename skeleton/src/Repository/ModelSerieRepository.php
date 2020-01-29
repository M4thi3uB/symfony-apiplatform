<?php

namespace App\Repository;

use App\Entity\ModelSerie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ModelSerie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModelSerie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModelSerie[]    findAll()
 * @method ModelSerie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModelSerieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModelSerie::class);
    }

    // /**
    //  * @return ModelSerie[] Returns an array of ModelSerie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModelSerie
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
