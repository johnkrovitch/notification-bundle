<?php

namespace JK\NotificationBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PublicServicePass implements CompilerPassInterface
{
    /**
     * A regex to match the services that should be public.
     *
     * @var string
     */
    private $regex;
    /**
     * @param string $regex
     */
    public function __construct($regex = '|.*|')
    {
        $this->regex = $regex;
    }
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        foreach ($container->getDefinitions() as $id => $definition) {
            if (preg_match($this->regex, $id)) {
                $definition->setPublic(true);
            }
        }
        foreach ($container->getAliases() as $id => $alias) {
            if (preg_match($this->regex, $id)) {
                $alias->setPublic(true);
            }
        }
    }
}
