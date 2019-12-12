<?php

namespace JK\NotificationBundle\Factory;

use JK\NotificationBundle\Entity\Notification;

interface NotificationFactoryInterface
{
    public function create(string $title, string $content, string $ownerId = null): Notification;
}
