<?php

namespace JK\NotificationBundle\Entity;

use Gedmo\Timestampable\Traits\Timestampable;

class Notification
{
    use Timestampable;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $ownerId;

    /**
     * @var string
     */
    protected $ownerReference;

    /**
     * @var bool
     */
    protected $read = false;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function isRead(): bool
    {
        return $this->read;
    }

    public function setRead(bool $read): void
    {
        $this->read = $read;
    }

    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    public function setOwnerId(string $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    public function hasOwnerId(): bool
    {
        return null !== $this->ownerId;
    }

    public function getOwnerReference(): string
    {
        return $this->ownerReference;
    }

    public function setOwnerReference(string $ownerReference): void
    {
        $this->ownerReference = $ownerReference;
    }
}
