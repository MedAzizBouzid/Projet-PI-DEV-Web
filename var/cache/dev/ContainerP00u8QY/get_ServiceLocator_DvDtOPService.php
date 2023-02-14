<?php

namespace ContainerP00u8QY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DvDtOPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dvDt_OP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dvDt_OP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.dvDt_OP.App\\Entity\\Panier', NULL, 'Cannot autowire service ".service_locator.dvDt_OP": it needs an instance of "App\\Entity\\Panier" but this type has been excluded in "config/services.yaml".'],
            'produitRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
        ], [
            'produit' => 'App\\Entity\\Panier',
            'produitRepository' => 'App\\Repository\\PanierRepository',
        ]);
    }
}
