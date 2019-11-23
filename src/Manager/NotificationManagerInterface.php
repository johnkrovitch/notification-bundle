<?php

namespace JK\NotificationBundle\Manager;

use JK\NotificationBundle\Entity\Notification;

interface NotificationManagerInterface
{
    public function get(int $id): Notification;

    public function create(string $title, string $content, int $ownerId = null): Notification;

    public function markAsRead(Notification $notification): void;

    public function save(Notification $notification): void;
}
