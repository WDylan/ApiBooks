<?php

namespace ContainerTEMVVqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_EventListener_JsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hateoas.event_listener.json' shared service.
     *
     * @return \Hateoas\Serializer\AddRelationsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'hateoas'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'AddRelationsListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'hateoas'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'SerializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'hateoas'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'JsonHalSerializer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'hateoas'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'InlineDeferrer.php';

        return $container->services['hateoas.event_listener.json'] = new \Hateoas\Serializer\AddRelationsListener(new \Hateoas\Serializer\JsonHalSerializer(), ($container->privates['hateoas.links_factory'] ?? $container->load('getHateoas_LinksFactoryService')), ($container->privates['hateoas.embeds_factory'] ?? $container->load('getHateoas_EmbedsFactoryService')), ($container->privates['hateoas.inline_deferrer.embeds'] ??= new \Hateoas\Serializer\Metadata\InlineDeferrer()), ($container->privates['hateoas.inline_deferrer.links'] ??= new \Hateoas\Serializer\Metadata\InlineDeferrer()));
    }
}
