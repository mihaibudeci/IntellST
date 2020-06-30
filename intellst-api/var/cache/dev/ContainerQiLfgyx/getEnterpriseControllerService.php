<?php

namespace ContainerQiLfgyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnterpriseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EnterpriseController' shared autowired service.
     *
     * @return \App\Controller\EnterpriseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EnterpriseController.php';
        include_once \dirname(__DIR__, 4).'/src/Services/EnterpriseHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Transformer/EnterpriseTransformer.php';
        include_once \dirname(__DIR__, 4).'/src/Serializer/ValidationErrorSerializer.php';

        $container->services['App\\Controller\\EnterpriseController'] = $instance = new \App\Controller\EnterpriseController(new \App\Services\EnterpriseHandler(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['validator'] ?? $container->load('getValidatorService')), new \App\Transformer\EnterpriseTransformer()), ($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->privates['App\\Serializer\\ValidationErrorSerializer'] ?? ($container->privates['App\\Serializer\\ValidationErrorSerializer'] = new \App\Serializer\ValidationErrorSerializer())));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\EnterpriseController', $container));

        return $instance;
    }
}