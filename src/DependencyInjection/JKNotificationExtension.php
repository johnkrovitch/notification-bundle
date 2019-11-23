<?php

namespace JK\NotificationBundle\DependencyInjection;

use JK\NotificationBundle\DependencyInjection\Helper\ConfigurationHelper;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class JKNotificationExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator([
            __DIR__.'/../Resources/config',
        ]));
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (!$container->hasDefinition(ConfigurationHelper::class)) {
            return;
        }
        $definition = $container->getDefinition(ConfigurationHelper::class);
        $definition->setArgument(0, $config);
    }


    public function getAlias()
    {
        return 'jk_notification';
    }
}
