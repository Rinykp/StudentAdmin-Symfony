<?php

namespace App\Repository;

use App\Entity\Marks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Marks>
 *
 * @method Marks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Marks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Marks[]    findAll()
 * @method Marks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Marks::class);
    }

    public function findAllOrderByStudent(QueryBuilder $queryBuilder = null)
    {
        $queryBuilder = $queryBuilder ?? $this->createQueryBuilder('marks');
        return  $queryBuilder->groupBy('marks.student_id')->orderBy('marks.id','DESC')->getQuery()->getResult();
    }
    public function findAllOrdered(): array
    {
//        $qb = 'SELECT * FROM App\Entity\Marks as mar ORDER BY marks.marks DESC';
//        $query = $qb->getQuery();
//        dd( $query);
//        $dql = 'SELECT category FROM App\Entity\Category as category ORDER BY category.name DESC';
        $qb = $this->addGroupByCategory()
            ->addOrderBy('marks.marks', Criteria::DESC);
        dd(     $qb->getQuery());
        $query = $qb->getQuery();

        return $query->getResult();
    }

    public function search(string $term): array
    {
        $termList = explode(' ', $term);
        $qb = $this->addOrderByCategoryName();

        return $this->addGroupByCategory($qb)
            ->andWhere('marks.marks LIKE :searchTerm OR marks.student.name IN (:termList) OR marks.subject.name LIKE :searchTerm OR marks.marks LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$term.'%')
            ->setParameter('termList', $termList)
            ->getQuery()
            ->getResult();
    }
    private function addGroupByCategory(QueryBuilder $qb = null): QueryBuilder
    {
        $eeee =  ($qb ?? $this->createQueryBuilder('marks'))
            ->addSelect('student.id,subject.id')
            ->leftJoin('marks.student', 'student')
            ->leftJoin('marks.subject', 'subject')
            ->addGroupBy('marks.id');
        return $eeee;
    }
    private function addOrderByCategoryName(QueryBuilder $qb = null): QueryBuilder
    {
        return ($qb ?? $this->createQueryBuilder('marks'))
            ->addOrderBy('marks.marks', Criteria::DESC);
    }
//    /**
//     * @return Marks[] Returns an array of Marks objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Marks
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
