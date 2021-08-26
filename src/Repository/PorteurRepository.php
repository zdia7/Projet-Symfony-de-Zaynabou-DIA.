<?php

namespace App\Repository;

use App\Entity\Porteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Porteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Porteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Porteur[]    findAll()
 * @method Porteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PorteurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Porteur::class);
    }

    // /**
    //  * @return Porteur[] Returns an array of Porteur objects
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
    public function findOneBySomeField($value): ?Porteur
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
