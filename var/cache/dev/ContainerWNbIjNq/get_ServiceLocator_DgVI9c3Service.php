<?php

namespace ContainerWNbIjNq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DgVI9c3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DgVI9c3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DgVI9c3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.DgVI9c3.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.DgVI9c3": it needs an instance of "App\\Entity\\Activite" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'activite' => 'App\\Entity\\Activite',
            'entityManager' => '?',
        ]);
    }
}
