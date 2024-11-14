<?php

namespace ContainerQFMChOQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_IdAccessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'turbo.id_accessor' shared service.
     *
     * @return \Symfony\UX\Turbo\Broadcaster\IdAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/IdAccessor.php';

        return $container->privates['turbo.id_accessor'] = new \Symfony\UX\Turbo\Broadcaster\IdAccessor(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
