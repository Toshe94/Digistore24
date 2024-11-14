<?php

namespace Container55JfU4H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Broadcaster_ActionRenderer_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'turbo.broadcaster.action_renderer.inner' shared service.
     *
     * @return \Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/BroadcasterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/ImuxBroadcaster.php';

        return $container->privates['turbo.broadcaster.action_renderer.inner'] = new \Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster(new RewindableGenerator(fn () => new \EmptyIterator(), 0));
    }
}
