<?php

namespace App\Infrastructure\Doctrine;

use App\Domain\Admin\AdminFilter;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NoResultException;
use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminId;
use App\Domain\Admin\AdminNotFound;
use App\Domain\Admin\AdminRepository;

final class DoctrineAdminRepository implements AdminRepository
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * DoctrineAdminRepository constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return AdminId
     */
    public function nextId()
    {
        $lastId = $this->entityManager->createQueryBuilder()
            ->select('COALESCE( MAX(a.id), 0 )')
            ->from(Admin::class, 'a')
            ->getQuery()
            ->getSingleScalarResult();

        return new AdminId($lastId + 1);
    }

    /**
     * @param AdminFilter $filter
     *
     * @return \App\Domain\Admin\Admin[]|null
     */
    public function all(AdminFilter $filter)
    {
        try {
            $queryBuilder = $this->entityManager
                ->createQueryBuilder()
                ->select('a')
                ->from(Admin::class, 'a')
                ->andWhere('a.deletedAt is NULL');

            return $queryBuilder->getQuery()->getResult();
        } catch (NoResultException $e) {
            return [];
        }
    }

    /**
     * @param string $email
     *
     * @return Admin|null
     *
     * @throws AdminNotFound
     */
    public function byEmail($email)
    {
        try {
            return $this->entityManager
                ->createQueryBuilder()
                ->select('a')
                ->from(Admin::class, 'a')
                ->andWhere('a.deletedAt is NULL')
                ->andWhere('a.email = :email')
                ->getQuery()
                ->setParameter('email', (string) $email)
                ->getSingleResult();

        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * @param AdminId $adminId
     *
     * @return Admin|null
     *
     * @throws \Doctrine\ORM\NonUniqueResultException|AdminNotFound
     */
    public function byId(AdminId $adminId)
    {
        try {
            return $this->entityManager
                ->createQueryBuilder()
                ->select('a')
                ->from(Admin::class, 'a')
                ->andWhere('a.deletedAt is NULL')
                ->andWhere('a.id = :adminId')
                ->getQuery()
                ->setParameter('adminId', (string) $adminId)
                ->getSingleResult();

        } catch (NoResultException $e) {
            throw AdminNotFound::fromId($adminId);
        }
    }

    /**
     * @param Admin $admin
     */
    public function store(Admin $admin)
    {
        $this->entityManager->persist($admin);
        $this->entityManager->flush($admin);
    }

    /**
     * @param Admin $admin
     */
    public function delete(Admin $admin)
    {
        $admin->delete();
        $this->entityManager->flush();
    }
}