<?php

namespace App\Repository;

use App\Entity\Products;
use App\Entity\ProductSearch;
use App\Form\ProductSearchType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }


    public function findOneLast(): ?Products
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getOneOrNullResult();
    }

     /**
      * @return Products[] Returns an array of Products objects
      */
    public function findRelatedNote($note, $id)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.note = :note')
            ->andWhere('p.id != :id')
            ->setParameter('note', $note)
            ->setParameter('id', $id)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Products[] Returns an array of Products objects
     */
    public function find4Products()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
            ;
    }





    /**
     * @return \Doctrine\ORM\Query
     */
    public function findByCategoryQuery(ProductSearch $search, $id)
    {
        $query =
            $this->createQueryBuilder('p')
                ->select('c', 'p', 'n')
                ->join('p.categorie', 'c')
                ->join('p.note', 'n');

        if (empty($search->categories)) {
            $query = $query
                ->andWhere('p.categorie = :id')
                ->setParameter('id', $id);
        }

        if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.name LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere('p.sellPrice >= :min')
                ->setParameter('min', $search->min);
        }

        if (!empty($search->max)) {
            $query = $query
                ->andWhere('p.sellPrice <= :max')
                ->setParameter('max', $search->max);
        }

        if (!empty($search->categories)) {
            $query = $query
                ->andwhere('c IN (:categories)')
                ->setParameter('categories', $search->categories);
        }

        if (!empty($search->notes)) {
            $query = $query
                ->andwhere('n IN (:notes)')
                ->setParameter('notes', $search->notes);
        }

        return $query
            ->orderBy('p.id', 'ASC')
            ->getQuery();
    }

    // /**
    //  * @return Products[] Returns an array of Products objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Products
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
