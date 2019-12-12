<?php

namespace JK\NotificationBundle\Factory;

use JK\NotificationBundle\Entity\Notification;

class NotificationFactory implements NotificationFactoryInterface
{
    public function create(string $title, string $content, string $ownerId = null): Notification
    {
        $notification = new Notification();
        $notification->setTitle($title);
        $notification->setContent($content);

        if ($ownerId) {
            $notification->setOwnerId($ownerId);
        }

        return $notification;
    }
}
