<?php

namespace ContainerGx3VVsc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3aFRrpsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3aFRrps' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3aFRrps'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.3aFRrps.App\\Entity\\Test', NULL, 'Cannot autowire service ".service_locator.3aFRrps": it needs an instance of "App\\Entity\\Test" but this type has been excluded in "config/services.yaml".'],
        ], [
            'activite' => 'App\\Entity\\Test',
        ]);
    }
}
