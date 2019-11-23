<?php

namespace JK\NotificationBundle\Event\Subscriber;

use JK\NotificationBundle\Event\Events;
use JK\NotificationBundle\Event\NotificationEvent;
use JK\NotificationBundle\Manager\NotificationManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class NotificationSubscriber implements EventSubscriberInterface
{
    /**
     * @var NotificationManagerInterface
     */
    private $manager;

    public static function getSubscribedEvents()
    {
        return [
            Events::NOTIFY => 'createNotification',
        ];
    }

    public function __construct(NotificationManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function createNotification(NotificationEvent $event): void
    {
        $this->manager->create($event->getTitle(), $event->getContent(), $event->getOwnerId());
    }
}
