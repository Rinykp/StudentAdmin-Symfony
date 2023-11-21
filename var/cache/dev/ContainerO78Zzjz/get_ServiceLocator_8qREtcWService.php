<?php

namespace ContainerO78Zzjz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8qREtcWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8qREtcW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8qREtcW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'student' => ['privates', '.errored..service_locator.8qREtcW.App\\Entity\\Student', NULL, 'Cannot autowire service ".service_locator.8qREtcW": it references class "App\\Entity\\Student" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'student' => 'App\\Entity\\Student',
        ]);
    }
}