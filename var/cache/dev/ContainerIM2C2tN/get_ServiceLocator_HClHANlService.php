<?php

namespace ContainerIM2C2tN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HClHANlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HClHANl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HClHANl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'em' => '?',
            'salleRepository' => 'App\\Repository\\SalleRepository',
            'slugger' => '?',
        ]);
    }
}
