<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Student>
 *
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }
    public function findAllOrder(QueryBuilder $queryBuilder = null)
    {
        $queryBuilder = $queryBuilder ?? $this->createQueryBuilder('student');
        return  $queryBuilder->orderBy('student.id','DESC')->getQuery()->getResult();
    }
    public function findAllWithSubjectsAndMarks()
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.marks', 'm')
            ->leftJoin('m.subject', 'sub')
            ->getQuery()
            ->getResult();
    }
    public function findAlls(QueryBuilder $qb = null): QueryBuilder
    {
        return ($qb ?? $this->createQueryBuilder('s')
            ->leftJoin('s.marks', 'm')
            ->leftJoin('m.subject', 'sub'));
    }

    public function search(string $term): array
    {
        $termList = explode(' ', $term);
        $qb = $this->findAlls();

        return $qb
            ->andWhere('s.name LIKE :searchTerm OR s.name IN (:termList) OR sub.name LIKE :searchTerm OR m.marks LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$term.'%')
            ->setParameter('termList', $termList)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Student[] Returns an array of Student objects
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

//    public function findOneBySomeField($value): ?Student
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
