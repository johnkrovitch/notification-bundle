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
     * @var string
     */
    private $ownerId;

    public function __construct(string $title, string $content, string $ownerId = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->ownerId = $ownerId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getOwnerId(): string
    {
        return $this->ownerId;
    }
}
