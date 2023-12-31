<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ss7v30Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ss7v30_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ss7v30_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mark' => ['privates', '.errored..service_locator.Ss7v30_.App\\Entity\\Marks', NULL, 'Cannot autowire service ".service_locator.Ss7v30_": it references class "App\\Entity\\Marks" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'mark' => 'App\\Entity\\Marks',
        ]);
    }
}
