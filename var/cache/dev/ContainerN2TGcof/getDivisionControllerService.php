<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDivisionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DivisionController' shared autowired service.
     *
     * @return \App\Controller\DivisionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DivisionController.php';

        $container->services['App\\Controller\\DivisionController'] = $instance = new \App\Controller\DivisionController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\DivisionController', $container));

        return $instance;
    }
}
