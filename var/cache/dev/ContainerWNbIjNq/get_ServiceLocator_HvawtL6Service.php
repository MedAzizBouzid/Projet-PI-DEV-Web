<?php

namespace ContainerWNbIjNq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HvawtL6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HvawtL6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HvawtL6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'am' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'am' => '?',
        ]);
    }
}
