<?php

namespace Container55JfU4H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getZenstruckMessengerTest_TransportFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'zenstruck_messenger_test.transport_factory' shared service.
     *
     * @return \Zenstruck\Messenger\Test\Transport\TestTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/messenger-test/src/Transport/TestTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/clock/src/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/Clock.php';

        $a = ($container->privates['messenger.routable_message_bus'] ?? $container->load('getMessenger_RoutableMessageBusService'));

        if (isset($container->privates['zenstruck_messenger_test.transport_factory'])) {
            return $container->privates['zenstruck_messenger_test.transport_factory'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['zenstruck_messenger_test.transport_factory'])) {
            return $container->privates['zenstruck_messenger_test.transport_factory'];
        }

        return $container->privates['zenstruck_messenger_test.transport_factory'] = new \Zenstruck\Messenger\Test\Transport\TestTransportFactory($a, $b, ($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
    }
}
