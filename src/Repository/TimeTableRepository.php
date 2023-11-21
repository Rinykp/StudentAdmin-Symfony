<?php

namespace App\Repository;

use App\Entity\TimeTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TimeTable>
 *
 * @method TimeTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimeTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimeTable[]    findAll()
 * @method TimeTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimeTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimeTable::class);
    }


    public function findAllOrder(QueryBuilder $queryBuilder = null)
    {
        $queryBuilder = $queryBuilder ?? $this->createQueryBuilder('time_table');
        return  $queryBuilder->orderBy('time_table.id','DESC')->getQuery()->getResult();
    }

//    public function findOneBySomeField($value): ?TimeTable
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
