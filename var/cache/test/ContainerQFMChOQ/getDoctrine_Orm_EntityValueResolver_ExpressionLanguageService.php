<?php

namespace ContainerQFMChOQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_EntityValueResolver_ExpressionLanguageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.entity_value_resolver.expression_language' shared service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.entity_value_resolver.expression_language'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
    }
}
