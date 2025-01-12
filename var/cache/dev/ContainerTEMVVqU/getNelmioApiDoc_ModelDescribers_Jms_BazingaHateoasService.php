<?php

namespace ContainerTEMVVqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_Jms_BazingaHateoasService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.jms.bazinga_hateoas' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\BazingaHateoasModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'BazingaHateoasModelDescriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'ApplyOpenApiDiscriminatorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'JMSModelDescriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'ConfiguredContextFactory.php';

        return $container->privates['nelmio_api_doc.model_describers.jms.bazinga_hateoas'] = new \Nelmio\ApiDocBundle\ModelDescriber\BazingaHateoasModelDescriber(($container->privates['hateoas.configuration.metadata_factory'] ?? $container->load('getHateoas_Configuration_MetadataFactoryService')), new \Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber(($container->privates['jms_serializer.traceable_metadata_factory'] ?? $container->load('getJmsSerializer_TraceableMetadataFactoryService')), NULL, ['json'], NULL, false, ($container->services['jms_serializer.serialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())));
    }
}
