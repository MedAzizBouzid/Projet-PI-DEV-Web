<?php

namespace ContainerMBeYU5E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2FmZe6rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2FmZe6r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2FmZe6r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
        ], [
            'mr' => '?',
            'repo' => 'App\\Repository\\ActiviteRepository',
        ]);
    }
}
