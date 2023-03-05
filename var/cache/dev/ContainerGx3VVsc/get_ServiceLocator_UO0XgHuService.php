<?php

namespace ContainerGx3VVsc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UO0XgHuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UO0XgHu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UO0XgHu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'MapRepository' => ['privates', 'App\\Repository\\MapRepository', 'getMapRepositoryService', true],
            'calendrierRepository' => ['privates', 'App\\Repository\\CalendrierRepository', 'getCalendrierRepositoryService', true],
            'salle' => ['privates', '.errored..service_locator.UO0XgHu.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.UO0XgHu": it needs an instance of "App\\Entity\\Salle" but this type has been excluded in "config/services.yaml".'],
        ], [
            'MapRepository' => 'App\\Repository\\MapRepository',
            'calendrierRepository' => 'App\\Repository\\CalendrierRepository',
            'salle' => 'App\\Entity\\Salle',
        ]);
    }
}
