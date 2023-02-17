<?php

namespace App\Repository;

use App\Entity\JokeUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JokeUser>
 *
 * @method JokeUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method JokeUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method JokeUser[]    findAll()
 * @method JokeUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JokeUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JokeUser::class);
    }

    public function save(JokeUser $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JokeUser $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return JokeUser[] Returns an array of JokeUser objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JokeUser
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
