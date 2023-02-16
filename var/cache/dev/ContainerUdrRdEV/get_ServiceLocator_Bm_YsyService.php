<?php

namespace ContainerUdrRdEV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bm_YsyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bm._Ysy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bm._Ysy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
        ], [
            'em' => '?',
            'salleRepository' => 'App\\Repository\\SalleRepository',
        ]);
    }
}
