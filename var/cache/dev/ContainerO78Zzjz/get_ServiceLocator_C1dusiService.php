<?php

namespace ContainerO78Zzjz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C1dusiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c_1dusi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c_1dusi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'subject' => ['privates', '.errored..service_locator.c_1dusi.App\\Entity\\Subject', NULL, 'Cannot autowire service ".service_locator.c_1dusi": it references class "App\\Entity\\Subject" but no such service exists.'],
        ], [
            'subject' => 'App\\Entity\\Subject',
        ]);
    }
}