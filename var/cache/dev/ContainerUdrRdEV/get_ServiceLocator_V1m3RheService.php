<?php

namespace ContainerUdrRdEV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V1m3RheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V1m3Rhe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V1m3Rhe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'salle' => ['privates', '.errored..service_locator.V1m3Rhe.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.V1m3Rhe": it needs an instance of "App\\Entity\\Salle" but this type has been excluded in "config/services.yaml".'],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
        ], [
            'salle' => 'App\\Entity\\Salle',
            'salleRepository' => 'App\\Repository\\SalleRepository',
        ]);
    }
}
