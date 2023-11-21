<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5gTJtUgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5gTJtUg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5gTJtUg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'subjectRepository' => ['privates', 'App\\Repository\\SubjectRepository', 'getSubjectRepositoryService', true],
        ], [
            'subjectRepository' => 'App\\Repository\\SubjectRepository',
        ]);
    }
}