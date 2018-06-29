<?php
namespace gueroverde\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class GueroverdeApmExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // ... you'll load the files here later
        $loader = new YamlFileLoader(
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yml');
    }

}