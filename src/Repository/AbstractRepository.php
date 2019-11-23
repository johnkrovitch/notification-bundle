<?php

namespace JK\NotificationBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ManagerRegistry;

abstract class AbstractRepository extends ServiceEntityRepository implements RepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, $this->getEntityClass());
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null): Collection
    {
        return new ArrayCollection(parent::findBy($criteria, $orderBy, $limit, $offset));
    }

    public function findAll(): Collection
    {
        return new ArrayCollection(parent::findAll());
    }
}
