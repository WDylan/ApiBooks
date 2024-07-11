<?php

namespace ContainerTEMVVqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_ConfigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.describers.config' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'DescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ExternalDocDescriber.php';

        return $container->privates['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(['info' => ['title' => 'Books', 'description' => 'Une APi d\'opérations CRUD sur les livres', 'version' => '2.0.0'], 'paths' => ['/api/login_check' => ['post' => ['operationId' => 'postCredentialsItem', 'tags' => ['Token'], 'summary' => 'Permet d\'obtenir le token JWT pour se logger.', 'requestBody' => ['description' => 'Crée un nouveau token JWT', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Credentials']]]], 'responses' => [200 => ['description' => 'Récupère le Token JWT', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Token']]]]]]]], 'components' => ['schemas' => ['Token' => ['type' => 'object', 'properties' => ['token' => ['type' => 'string', 'readOnly' => true]]], 'Credentials' => ['type' => 'object', 'properties' => ['username' => ['type' => 'string', 'default' => 'admin@bookapi.com'], 'password' => ['type' => 'string', 'default' => 'password']]]], 'securitySchemes' => ['BearerAuth' => ['type' => 'apiKey', 'in' => 'header', 'name' => 'Authorization']]], 'security' => [['BearerAuth' => []]]]);
    }
}