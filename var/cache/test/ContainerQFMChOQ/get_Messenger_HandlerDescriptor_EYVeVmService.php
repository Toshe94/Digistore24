<?php

namespace ContainerQFMChOQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_EYVeVmService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.EYVeVm_' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->privates['App\\Message\\SendMessageHandler'] ?? $container->load('getSendMessageHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.EYVeVm_'])) {
            return $container->privates['.messenger.handler_descriptor.EYVeVm_'];
        }

        return $container->privates['.messenger.handler_descriptor.EYVeVm_'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, []);
    }
}
