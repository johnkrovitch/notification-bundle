<?php

namespace JK\NotificationBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

class NotificationEvent extends Event
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $ownerId;

    public function __construct(string $title, string $content, int $ownerId = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->ownerId = $ownerId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }
}
