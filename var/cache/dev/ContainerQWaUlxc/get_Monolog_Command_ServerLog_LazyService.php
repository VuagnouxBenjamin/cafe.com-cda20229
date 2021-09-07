<?php

namespace ContainerQWaUlxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Monolog_Command_ServerLog_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.monolog.command.server_log.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.monolog.command.server_log.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('server:log', [], 'Start a log server that displays logs in real time', false, function () use ($container): \Symfony\Bridge\Monolog\Command\ServerLogCommand {
            return ($container->privates['monolog.command.server_log'] ?? $container->load('getMonolog_Command_ServerLogService'));
        });
    }
}
