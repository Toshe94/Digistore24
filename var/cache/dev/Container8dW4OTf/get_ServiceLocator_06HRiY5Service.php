<?php

namespace Container8dW4OTf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_06HRiY5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.06HRiY5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.06HRiY5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
            'serializer' => '?',
        ]);
    }
}
