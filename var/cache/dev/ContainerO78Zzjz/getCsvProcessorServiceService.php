<?php

namespace ContainerO78Zzjz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvProcessorServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CsvProcessorService' shared autowired service.
     *
     * @return \App\Service\CsvProcessorService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CsvProcessorService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Service\\CsvProcessorService'])) {
            return $container->privates['App\\Service\\CsvProcessorService'];
        }

        return $container->privates['App\\Service\\CsvProcessorService'] = new \App\Service\CsvProcessorService($a);
    }
}
