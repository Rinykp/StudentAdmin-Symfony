<?php

namespace ContainerO78Zzjz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5T3lB6gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5T3lB6g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5T3lB6g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'teacher' => ['privates', '.errored..service_locator.5T3lB6g.App\\Entity\\Teacher', NULL, 'Cannot autowire service ".service_locator.5T3lB6g": it references class "App\\Entity\\Teacher" but no such service exists.'],
        ], [
            'teacher' => 'App\\Entity\\Teacher',
        ]);
    }
}
