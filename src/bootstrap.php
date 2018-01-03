<?php
use Slim\App;

$env = new \Dotenv\Dotenv(realpath(__DIR__ . '/../'));
$env->load();

$config = (new SlimApi\Module)->loadDependencies();
$app    = new App($config);

// DIC configuration
$container = $app->getContainer();

foreach ($container->get('slim-api')['modules'] as $moduleNamespace) {
    $container->get($moduleNamespace.'\Init');
}

// Register middleware
require 'middleware.php';

// Register routes
require 'routes.php';

$app->run();
