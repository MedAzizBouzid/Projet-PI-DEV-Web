<?php

namespace ContainerGx3VVsc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IRNJR8uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IRNJR8u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IRNJR8u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'salle' => ['privates', '.errored..service_locator.IRNJR8u.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.IRNJR8u": it needs an instance of "App\\Entity\\Salle" but this type has been excluded in "config/services.yaml".'],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'salle' => 'App\\Entity\\Salle',
            'salleRepository' => 'App\\Repository\\SalleRepository',
            'slugger' => '?',
        ]);
    }
}
