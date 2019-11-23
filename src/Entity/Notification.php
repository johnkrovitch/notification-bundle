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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return bool
     */
    public function isRead(): bool
    {
        return $this->read;
    }

    /**
     * @param bool $read
     */
    public function setRead(bool $read): void
    {
        $this->read = $read;
    }

    /**
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    /**
     * @param string $ownerId
     */
    public function setOwnerId(string $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    public function hasOwnerId(): bool
    {
        return null !== $this->ownerId;
    }

    /**
     * @return string
     */
    public function getOwnerReference(): string
    {
        return $this->ownerReference;
    }

    /**
     * @param string $ownerReference
     */
    public function setOwnerReference(string $ownerReference): void
    {
        $this->ownerReference = $ownerReference;
    }
}
