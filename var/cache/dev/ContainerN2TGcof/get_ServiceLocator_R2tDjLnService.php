<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R2tDjLnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R2tDjLn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R2tDjLn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csvProcessorService' => ['privates', 'App\\Service\\CsvProcessorService', 'getCsvProcessorServiceService', true],
            'studentRepository' => ['privates', 'App\\Repository\\StudentRepository', 'getStudentRepositoryService', true],
        ], [
            'csvProcessorService' => 'App\\Service\\CsvProcessorService',
            'studentRepository' => 'App\\Repository\\StudentRepository',
        ]);
    }
}
