<?php

$container = new \Slim\Container($config);
$app = new \Slim\App($container);

// Service factory for the ORM
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

// Service factory for the Logger
$container['logger'] = function($container) {
    $logger = new \Monolog\Logger($container['settings']['logger']['name']);
    $file_handler = new \Monolog\Handler\StreamHandler($container['settings']['logger']['path']);
    $logger->pushHandler($file_handler);
    return $logger;
};

return $app;