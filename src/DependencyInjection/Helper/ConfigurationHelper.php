<?php

namespace JK\NotificationBundle\DependencyInjection\Helper;

class ConfigurationHelper
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getMailingBaseTemplate(): string
    {
        return $this->config['email']['base_template'];
    }

    public function getApplicationName(): string
    {
        return $this->config['application']['name'];
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
