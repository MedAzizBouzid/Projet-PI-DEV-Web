<?php

namespace ContainerWNbIjNq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NoSKBvgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NoSKBvg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NoSKBvg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendrierRepository' => ['privates', 'App\\Repository\\CalendrierRepository', 'getCalendrierRepositoryService', true],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
        ], [
            'calendrierRepository' => 'App\\Repository\\CalendrierRepository',
            'salleRepository' => 'App\\Repository\\SalleRepository',
        ]);
    }
}
