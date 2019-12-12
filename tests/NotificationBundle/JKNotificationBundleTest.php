<?php

namespace JK\NotificationBundle\Tests;

use JK\NotificationBundle\Tests\Kernel\TestKernel;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class JKNotificationBundleTest extends TestCase
{
    public function testBuild()
    {
        $kernel = new TestKernel('test', true);
        $kernel->boot();

        $container = $kernel->getContainer();

        $finder = new Finder();
        $finder
            ->in(__DIR__.'/../../src/Resources/config/services')
            ->files()
        ;
        $services = [];

        foreach ($finder as $file) {
            $data = Yaml::parseFile($file->getRealPath());
            $services = array_merge($services, $data['services']);
        }

        foreach ($services as $id => $service) {
            if ('_defaults' === $id) {
                continue;
            }
            $this->assertTrue($container->has($id), 'The service "'.$id.'" is not found');
            $container->get($id);
        }
    }
}
