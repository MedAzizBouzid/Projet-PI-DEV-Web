<?php

namespace ContainerGx3VVsc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.3aFRrps.App\Entity\Test' shared service.
     *
     * @return \App\Entity\Test
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.3aFRrps": it needs an instance of "App\\Entity\\Test" but this type has been excluded in "config/services.yaml".');
    }
}
