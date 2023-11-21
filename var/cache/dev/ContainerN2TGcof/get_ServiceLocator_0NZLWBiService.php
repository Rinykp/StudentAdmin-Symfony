<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0NZLWBiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0NZLWBi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0NZLWBi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'timeTable' => ['privates', '.errored..service_locator.0NZLWBi.App\\Entity\\TimeTable', NULL, 'Cannot autowire service ".service_locator.0NZLWBi": it references class "App\\Entity\\TimeTable" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'timeTable' => 'App\\Entity\\TimeTable',
        ]);
    }
}