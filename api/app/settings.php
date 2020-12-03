<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true, // Should be set to false in production
            'db' => [
                'driver' => 'mysql',
                'host' => 'mysql',
                'dbname' => 'unity_db',
                'username' => 'root',
                'password' => 'Hjvfirf55',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
            ],
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : 'php://stdout',
                'level' => Logger::DEBUG,
            ],
        ],
    ]);
};
