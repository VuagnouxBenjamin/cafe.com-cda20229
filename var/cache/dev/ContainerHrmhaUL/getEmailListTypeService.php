<?php

namespace ContainerHrmhaUL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailListTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EmailListType' shared autowired service.
     *
     * @return \App\Form\EmailListType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EmailListType.php';

        return $container->privates['App\\Form\\EmailListType'] = new \App\Form\EmailListType();
    }
}
