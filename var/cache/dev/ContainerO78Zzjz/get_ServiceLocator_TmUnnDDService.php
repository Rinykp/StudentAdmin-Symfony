<?php

namespace ContainerO78Zzjz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TmUnnDDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TmUnnDD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TmUnnDD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DivisionController::delete' => ['privates', '.service_locator.IkvzmsG', 'get_ServiceLocator_IkvzmsGService', true],
            'App\\Controller\\DivisionController::edit' => ['privates', '.service_locator.IkvzmsG', 'get_ServiceLocator_IkvzmsGService', true],
            'App\\Controller\\DivisionController::index' => ['privates', '.service_locator.3Az9MIU', 'get_ServiceLocator_3Az9MIUService', true],
            'App\\Controller\\DivisionController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\DivisionController::show' => ['privates', '.service_locator.7JPgPqB', 'get_ServiceLocator_7JPgPqBService', true],
            'App\\Controller\\MarksController::delete' => ['privates', '.service_locator.Ss7v30_', 'get_ServiceLocator_Ss7v30Service', true],
            'App\\Controller\\MarksController::edit' => ['privates', '.service_locator.Ss7v30_', 'get_ServiceLocator_Ss7v30Service', true],
            'App\\Controller\\MarksController::index' => ['privates', '.service_locator.2h6NWmY', 'get_ServiceLocator_2h6NWmYService', true],
            'App\\Controller\\MarksController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\MarksController::show' => ['privates', '.service_locator._ERbhix', 'get_ServiceLocator_ERbhixService', true],
            'App\\Controller\\ParentsController::delete' => ['privates', '.service_locator.G1apj0g', 'get_ServiceLocator_G1apj0gService', true],
            'App\\Controller\\ParentsController::edit' => ['privates', '.service_locator.G1apj0g', 'get_ServiceLocator_G1apj0gService', true],
            'App\\Controller\\ParentsController::index' => ['privates', '.service_locator.NydP8sX', 'get_ServiceLocator_NydP8sXService', true],
            'App\\Controller\\ParentsController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParentsController::show' => ['privates', '.service_locator.cJMmeiO', 'get_ServiceLocator_CJMmeiOService', true],
            'App\\Controller\\ProgressController::downloadCsv' => ['privates', '.service_locator.pCo5kRA', 'get_ServiceLocator_PCo5kRAService', true],
            'App\\Controller\\ProgressController::downloadPdf' => ['privates', '.service_locator.pCo5kRA', 'get_ServiceLocator_PCo5kRAService', true],
            'App\\Controller\\ProgressController::index' => ['privates', '.service_locator.d4CCdHr', 'get_ServiceLocator_D4CCdHrService', true],
            'App\\Controller\\ProgressController::sendEmail' => ['privates', '.service_locator.0BC9czQ', 'get_ServiceLocator_0BC9czQService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\SchoolClassController::delete' => ['privates', '.service_locator.CalGGjS', 'get_ServiceLocator_CalGGjSService', true],
            'App\\Controller\\SchoolClassController::edit' => ['privates', '.service_locator.CalGGjS', 'get_ServiceLocator_CalGGjSService', true],
            'App\\Controller\\SchoolClassController::index' => ['privates', '.service_locator.1jaqo2t', 'get_ServiceLocator_1jaqo2tService', true],
            'App\\Controller\\SchoolClassController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SchoolClassController::show' => ['privates', '.service_locator.REoQTBa', 'get_ServiceLocator_REoQTBaService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StudentController::delete' => ['privates', '.service_locator.8qREtcW', 'get_ServiceLocator_8qREtcWService', true],
            'App\\Controller\\StudentController::edit' => ['privates', '.service_locator.8qREtcW', 'get_ServiceLocator_8qREtcWService', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.R2tDjLn', 'get_ServiceLocator_R2tDjLnService', true],
            'App\\Controller\\StudentController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\StudentController::show' => ['privates', '.service_locator.Ir32RfB', 'get_ServiceLocator_Ir32RfBService', true],
            'App\\Controller\\SubjectController::delete' => ['privates', '.service_locator.wioxKy0', 'get_ServiceLocator_WioxKy0Service', true],
            'App\\Controller\\SubjectController::edit' => ['privates', '.service_locator.wioxKy0', 'get_ServiceLocator_WioxKy0Service', true],
            'App\\Controller\\SubjectController::index' => ['privates', '.service_locator.5gTJtUg', 'get_ServiceLocator_5gTJtUgService', true],
            'App\\Controller\\SubjectController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SubjectController::show' => ['privates', '.service_locator.c_1dusi', 'get_ServiceLocator_C1dusiService', true],
            'App\\Controller\\TeacherController::delete' => ['privates', '.service_locator.j6wLmFn', 'get_ServiceLocator_J6wLmFnService', true],
            'App\\Controller\\TeacherController::edit' => ['privates', '.service_locator.j6wLmFn', 'get_ServiceLocator_J6wLmFnService', true],
            'App\\Controller\\TeacherController::index' => ['privates', '.service_locator.OKQxK.v', 'get_ServiceLocator_OKQxK_VService', true],
            'App\\Controller\\TeacherController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TeacherController::show' => ['privates', '.service_locator.5T3lB6g', 'get_ServiceLocator_5T3lB6gService', true],
            'App\\Controller\\TimeTableController::assign' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController::delete' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController::edit' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController::index' => ['privates', '.service_locator.tNLtUKR', 'get_ServiceLocator_TNLtUKRService', true],
            'App\\Controller\\TimeTableController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TimeTableController::show' => ['privates', '.service_locator.wmL5zmY', 'get_ServiceLocator_WmL5zmYService', true],
            'App\\Controller\\TimeTableController::updateAction' => ['privates', '.service_locator.p.onzoo', 'get_ServiceLocator_P_OnzooService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\DivisionController:delete' => ['privates', '.service_locator.IkvzmsG', 'get_ServiceLocator_IkvzmsGService', true],
            'App\\Controller\\DivisionController:edit' => ['privates', '.service_locator.IkvzmsG', 'get_ServiceLocator_IkvzmsGService', true],
            'App\\Controller\\DivisionController:index' => ['privates', '.service_locator.3Az9MIU', 'get_ServiceLocator_3Az9MIUService', true],
            'App\\Controller\\DivisionController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\DivisionController:show' => ['privates', '.service_locator.7JPgPqB', 'get_ServiceLocator_7JPgPqBService', true],
            'App\\Controller\\MarksController:delete' => ['privates', '.service_locator.Ss7v30_', 'get_ServiceLocator_Ss7v30Service', true],
            'App\\Controller\\MarksController:edit' => ['privates', '.service_locator.Ss7v30_', 'get_ServiceLocator_Ss7v30Service', true],
            'App\\Controller\\MarksController:index' => ['privates', '.service_locator.2h6NWmY', 'get_ServiceLocator_2h6NWmYService', true],
            'App\\Controller\\MarksController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\MarksController:show' => ['privates', '.service_locator._ERbhix', 'get_ServiceLocator_ERbhixService', true],
            'App\\Controller\\ParentsController:delete' => ['privates', '.service_locator.G1apj0g', 'get_ServiceLocator_G1apj0gService', true],
            'App\\Controller\\ParentsController:edit' => ['privates', '.service_locator.G1apj0g', 'get_ServiceLocator_G1apj0gService', true],
            'App\\Controller\\ParentsController:index' => ['privates', '.service_locator.NydP8sX', 'get_ServiceLocator_NydP8sXService', true],
            'App\\Controller\\ParentsController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParentsController:show' => ['privates', '.service_locator.cJMmeiO', 'get_ServiceLocator_CJMmeiOService', true],
            'App\\Controller\\ProgressController:downloadCsv' => ['privates', '.service_locator.pCo5kRA', 'get_ServiceLocator_PCo5kRAService', true],
            'App\\Controller\\ProgressController:downloadPdf' => ['privates', '.service_locator.pCo5kRA', 'get_ServiceLocator_PCo5kRAService', true],
            'App\\Controller\\ProgressController:index' => ['privates', '.service_locator.d4CCdHr', 'get_ServiceLocator_D4CCdHrService', true],
            'App\\Controller\\ProgressController:sendEmail' => ['privates', '.service_locator.0BC9czQ', 'get_ServiceLocator_0BC9czQService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\SchoolClassController:delete' => ['privates', '.service_locator.CalGGjS', 'get_ServiceLocator_CalGGjSService', true],
            'App\\Controller\\SchoolClassController:edit' => ['privates', '.service_locator.CalGGjS', 'get_ServiceLocator_CalGGjSService', true],
            'App\\Controller\\SchoolClassController:index' => ['privates', '.service_locator.1jaqo2t', 'get_ServiceLocator_1jaqo2tService', true],
            'App\\Controller\\SchoolClassController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SchoolClassController:show' => ['privates', '.service_locator.REoQTBa', 'get_ServiceLocator_REoQTBaService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StudentController:delete' => ['privates', '.service_locator.8qREtcW', 'get_ServiceLocator_8qREtcWService', true],
            'App\\Controller\\StudentController:edit' => ['privates', '.service_locator.8qREtcW', 'get_ServiceLocator_8qREtcWService', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.R2tDjLn', 'get_ServiceLocator_R2tDjLnService', true],
            'App\\Controller\\StudentController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\StudentController:show' => ['privates', '.service_locator.Ir32RfB', 'get_ServiceLocator_Ir32RfBService', true],
            'App\\Controller\\SubjectController:delete' => ['privates', '.service_locator.wioxKy0', 'get_ServiceLocator_WioxKy0Service', true],
            'App\\Controller\\SubjectController:edit' => ['privates', '.service_locator.wioxKy0', 'get_ServiceLocator_WioxKy0Service', true],
            'App\\Controller\\SubjectController:index' => ['privates', '.service_locator.5gTJtUg', 'get_ServiceLocator_5gTJtUgService', true],
            'App\\Controller\\SubjectController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SubjectController:show' => ['privates', '.service_locator.c_1dusi', 'get_ServiceLocator_C1dusiService', true],
            'App\\Controller\\TeacherController:delete' => ['privates', '.service_locator.j6wLmFn', 'get_ServiceLocator_J6wLmFnService', true],
            'App\\Controller\\TeacherController:edit' => ['privates', '.service_locator.j6wLmFn', 'get_ServiceLocator_J6wLmFnService', true],
            'App\\Controller\\TeacherController:index' => ['privates', '.service_locator.OKQxK.v', 'get_ServiceLocator_OKQxK_VService', true],
            'App\\Controller\\TeacherController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TeacherController:show' => ['privates', '.service_locator.5T3lB6g', 'get_ServiceLocator_5T3lB6gService', true],
            'App\\Controller\\TimeTableController:assign' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController:delete' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController:edit' => ['privates', '.service_locator.0NZLWBi', 'get_ServiceLocator_0NZLWBiService', true],
            'App\\Controller\\TimeTableController:index' => ['privates', '.service_locator.tNLtUKR', 'get_ServiceLocator_TNLtUKRService', true],
            'App\\Controller\\TimeTableController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TimeTableController:show' => ['privates', '.service_locator.wmL5zmY', 'get_ServiceLocator_WmL5zmYService', true],
            'App\\Controller\\TimeTableController:updateAction' => ['privates', '.service_locator.p.onzoo', 'get_ServiceLocator_P_OnzooService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\DivisionController::delete' => '?',
            'App\\Controller\\DivisionController::edit' => '?',
            'App\\Controller\\DivisionController::index' => '?',
            'App\\Controller\\DivisionController::new' => '?',
            'App\\Controller\\DivisionController::show' => '?',
            'App\\Controller\\MarksController::delete' => '?',
            'App\\Controller\\MarksController::edit' => '?',
            'App\\Controller\\MarksController::index' => '?',
            'App\\Controller\\MarksController::new' => '?',
            'App\\Controller\\MarksController::show' => '?',
            'App\\Controller\\ParentsController::delete' => '?',
            'App\\Controller\\ParentsController::edit' => '?',
            'App\\Controller\\ParentsController::index' => '?',
            'App\\Controller\\ParentsController::new' => '?',
            'App\\Controller\\ParentsController::show' => '?',
            'App\\Controller\\ProgressController::downloadCsv' => '?',
            'App\\Controller\\ProgressController::downloadPdf' => '?',
            'App\\Controller\\ProgressController::index' => '?',
            'App\\Controller\\ProgressController::sendEmail' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SchoolClassController::delete' => '?',
            'App\\Controller\\SchoolClassController::edit' => '?',
            'App\\Controller\\SchoolClassController::index' => '?',
            'App\\Controller\\SchoolClassController::new' => '?',
            'App\\Controller\\SchoolClassController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StudentController::delete' => '?',
            'App\\Controller\\StudentController::edit' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::new' => '?',
            'App\\Controller\\StudentController::show' => '?',
            'App\\Controller\\SubjectController::delete' => '?',
            'App\\Controller\\SubjectController::edit' => '?',
            'App\\Controller\\SubjectController::index' => '?',
            'App\\Controller\\SubjectController::new' => '?',
            'App\\Controller\\SubjectController::show' => '?',
            'App\\Controller\\TeacherController::delete' => '?',
            'App\\Controller\\TeacherController::edit' => '?',
            'App\\Controller\\TeacherController::index' => '?',
            'App\\Controller\\TeacherController::new' => '?',
            'App\\Controller\\TeacherController::show' => '?',
            'App\\Controller\\TimeTableController::assign' => '?',
            'App\\Controller\\TimeTableController::delete' => '?',
            'App\\Controller\\TimeTableController::edit' => '?',
            'App\\Controller\\TimeTableController::index' => '?',
            'App\\Controller\\TimeTableController::new' => '?',
            'App\\Controller\\TimeTableController::show' => '?',
            'App\\Controller\\TimeTableController::updateAction' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\DivisionController:delete' => '?',
            'App\\Controller\\DivisionController:edit' => '?',
            'App\\Controller\\DivisionController:index' => '?',
            'App\\Controller\\DivisionController:new' => '?',
            'App\\Controller\\DivisionController:show' => '?',
            'App\\Controller\\MarksController:delete' => '?',
            'App\\Controller\\MarksController:edit' => '?',
            'App\\Controller\\MarksController:index' => '?',
            'App\\Controller\\MarksController:new' => '?',
            'App\\Controller\\MarksController:show' => '?',
            'App\\Controller\\ParentsController:delete' => '?',
            'App\\Controller\\ParentsController:edit' => '?',
            'App\\Controller\\ParentsController:index' => '?',
            'App\\Controller\\ParentsController:new' => '?',
            'App\\Controller\\ParentsController:show' => '?',
            'App\\Controller\\ProgressController:downloadCsv' => '?',
            'App\\Controller\\ProgressController:downloadPdf' => '?',
            'App\\Controller\\ProgressController:index' => '?',
            'App\\Controller\\ProgressController:sendEmail' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SchoolClassController:delete' => '?',
            'App\\Controller\\SchoolClassController:edit' => '?',
            'App\\Controller\\SchoolClassController:index' => '?',
            'App\\Controller\\SchoolClassController:new' => '?',
            'App\\Controller\\SchoolClassController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StudentController:delete' => '?',
            'App\\Controller\\StudentController:edit' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:new' => '?',
            'App\\Controller\\StudentController:show' => '?',
            'App\\Controller\\SubjectController:delete' => '?',
            'App\\Controller\\SubjectController:edit' => '?',
            'App\\Controller\\SubjectController:index' => '?',
            'App\\Controller\\SubjectController:new' => '?',
            'App\\Controller\\SubjectController:show' => '?',
            'App\\Controller\\TeacherController:delete' => '?',
            'App\\Controller\\TeacherController:edit' => '?',
            'App\\Controller\\TeacherController:index' => '?',
            'App\\Controller\\TeacherController:new' => '?',
            'App\\Controller\\TeacherController:show' => '?',
            'App\\Controller\\TimeTableController:assign' => '?',
            'App\\Controller\\TimeTableController:delete' => '?',
            'App\\Controller\\TimeTableController:edit' => '?',
            'App\\Controller\\TimeTableController:index' => '?',
            'App\\Controller\\TimeTableController:new' => '?',
            'App\\Controller\\TimeTableController:show' => '?',
            'App\\Controller\\TimeTableController:updateAction' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
