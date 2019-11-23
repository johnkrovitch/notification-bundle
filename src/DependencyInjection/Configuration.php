<?php

namespace JK\NotificationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jk_notification');

        $treeBuilder
            ->getRootNode()
                ->children()
                ->end()
        ->end();

        return $treeBuilder;
    }
}
