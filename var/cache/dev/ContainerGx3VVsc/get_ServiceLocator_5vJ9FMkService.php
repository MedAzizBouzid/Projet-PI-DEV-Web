<?php

namespace ContainerGx3VVsc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5vJ9FMkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5vJ9FMk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5vJ9FMk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', '.errored..service_locator.5vJ9FMk.App\\Entity\\Calendrier', NULL, 'Cannot autowire service ".service_locator.5vJ9FMk": it needs an instance of "App\\Entity\\Calendrier" but this type has been excluded in "config/services.yaml".'],
            'mg' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\CalendrierRepository', 'getCalendrierRepositoryService', true],
        ], [
            'calendar' => 'App\\Entity\\Calendrier',
            'mg' => '?',
            'repo' => 'App\\Repository\\CalendrierRepository',
        ]);
    }
}
