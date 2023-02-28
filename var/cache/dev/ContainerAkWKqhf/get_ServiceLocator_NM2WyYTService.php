<?php

namespace ContainerAkWKqhf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NM2WyYTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NM2WyYT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NM2WyYT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
        ], [
            'entityManager' => '?',
            'salleRepository' => 'App\\Repository\\SalleRepository',
        ]);
    }
}
