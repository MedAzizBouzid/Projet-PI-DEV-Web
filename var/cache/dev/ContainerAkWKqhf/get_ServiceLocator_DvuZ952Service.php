<?php

namespace ContainerAkWKqhf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DvuZ952Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DvuZ952' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DvuZ952'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.DvuZ952.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.DvuZ952": it needs an instance of "App\\Entity\\Activite" but this type has been excluded in "config/services.yaml".'],
        ], [
            'activite' => 'App\\Entity\\Activite',
        ]);
    }
}
