<?php

namespace JK\NotificationBundle\Tests\Entity;

use DateTime;
use JK\NotificationBundle\Entity\Notification;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyAccess\PropertyAccess;

class NotificationTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $now = new DateTime();

        $class = Notification::class;
        $mapping = [
            'ownerId' => 666,
            'content' => 'test',
            'title' => 'a notification',
            'id' => 66,
            'read' => true,
            'createdAt' => $now,
            'updatedAt' => $now,
        ];
        $entity = new $class();
        $accessor = PropertyAccess::createPropertyAccessor();

        foreach ($mapping as $field => $value) {
            $accessor->setValue($entity, $field, $value);
            $this->assertEquals($value, $accessor->getValue($entity, $field));
        }


    }
}
