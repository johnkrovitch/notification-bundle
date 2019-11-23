<?php

namespace JK\NotificationBundle\Repository;

use JK\NotificationBundle\Entity\Notification;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class NotificationRepository extends AbstractRepository
{
    public function save(Notification $notification): void
    {
        $this->_em->persist($notification);
        $this->_em->flush();
    }

    public function findUnread(string $ownerId = null): Collection
    {
        $queryBuilder = $this
            ->createQueryBuilder('notification')
            ->where('notification.read = :read')
            ->setParameter('read', false)
            ->addOrderBy('notification.updatedAt', 'desc')
            ->addOrderBy('notification.id', 'desc')
        ;

        if ($ownerId) {
            $queryBuilder
                ->andWhere('notification.ownerId = :owner_id')
                ->setParameter('owner_id', $ownerId)
            ;
        }

        return new ArrayCollection($queryBuilder->getQuery()->getResult());
    }

    public function getEntityClass(): string
    {
        return Notification::class;
    }
}
