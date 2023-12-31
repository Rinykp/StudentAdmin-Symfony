<?php

namespace ContainerN2TGcof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubjectTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SubjectType' shared autowired service.
     *
     * @return \App\Form\SubjectType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SubjectType.php';

        return $container->privates['App\\Form\\SubjectType'] = new \App\Form\SubjectType();
    }
}
