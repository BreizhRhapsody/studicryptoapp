<?php

namespace App\Repository;

use App\Entity\SaveOfJourney;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SaveOfJourney>
 *
 * @method SaveOfJourney|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaveOfJourney|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaveOfJourney[]    findAll()
 * @method SaveOfJourney[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaveOfJourneyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SaveOfJourney::class);
    }

    public function add(SaveOfJourney $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SaveOfJourney $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SaveOfJourney[] Returns an array of SaveOfJourney objects
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

//    public function findOneBySomeField($value): ?SaveOfJourney
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
