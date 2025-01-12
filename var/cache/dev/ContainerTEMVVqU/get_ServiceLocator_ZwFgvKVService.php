<?php

namespace ContainerTEMVVqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZwFgvKVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zwFgvKV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zwFgvKV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cachePool' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
            'currentAuthor' => ['privates', '.errored..service_locator.zwFgvKV.App\\Entity\\Author', NULL, 'Cannot autowire service ".service_locator.zwFgvKV": it needs an instance of "App\\Entity\\Author" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'jms_serializer', 'getJmsSerializerService', true],
            'validator' => ['privates', 'validator', 'getValidatorService', false],
        ], [
            'cachePool' => '?',
            'currentAuthor' => 'App\\Entity\\Author',
            'em' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
