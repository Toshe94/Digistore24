<?php

namespace Container55JfU4H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8457OqHService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.8457OqH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8457OqH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bus' => ['services', 'messenger.bus.default.test-bus', 'getMessenger_Bus_Default_TestbusService', true],
        ], [
            'bus' => '?',
        ]);
    }
}
