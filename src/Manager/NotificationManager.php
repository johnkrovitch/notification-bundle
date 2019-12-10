<?php

namespace JK\NotificationBundle\Manager;

use JK\NotificationBundle\Entity\Notification;
use JK\NotificationBundle\Factory\NotificationFactoryInterface;
use JK\NotificationBundle\Repository\NotificationRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NotificationManager implements NotificationManagerInterface
{
    /**
     * @var NotificationRepository
     */
    private $repository;

    /**
     * @var NotificationFactoryInterface
     */
    private $factory;

    public function __construct(NotificationFactoryInterface $factory, NotificationRepository $repository)
    {
        $this->repository = $repository;
        $this->factory = $factory;
    }

    public function get(int $id): Notification
    {
        $notification = $this->repository->find($id);

        if (!$notification instanceof Notification) {
            throw new NotFoundHttpException();
        }

        return $notification;
    }

    public function create(string $title, string $content, string $ownerId = null): Notification
    {
        $notification = $this->factory->create($title, $content, $ownerId);
        $this->save($notification);

        return $notification;
    }

    public function markAsRead(Notification $notification): void
    {
        $notification->setRead(true);
        $this->save($notification);
    }

    public function save(Notification $notification): void
    {
        $this->repository->save($notification);
    }
}
