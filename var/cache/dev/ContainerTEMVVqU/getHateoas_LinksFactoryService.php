<?php

namespace ContainerTEMVVqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_LinksFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'hateoas.links_factory' shared service.
     *
     * @return \Hateoas\Factory\LinksFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'hateoas'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'LinksFactory.php';

        return $container->privates['hateoas.links_factory'] = new \Hateoas\Factory\LinksFactory(($container->privates['hateoas.configuration.metadata_factory'] ?? $container->load('getHateoas_Configuration_MetadataFactoryService')), ($container->privates['hateoas.link_factory'] ?? $container->load('getHateoas_LinkFactoryService')), ($container->privates['hateoas.serializer.exclusion_manager'] ?? $container->load('getHateoas_Serializer_ExclusionManagerService')));
    }
}
