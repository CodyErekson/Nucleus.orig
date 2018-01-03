<?php
$config = [];

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$config['logger'] = function ($container) {
    $settings = $container['settings']['logger'];
    $logger = new \Monolog\Logger(strtolower($settings['name']));
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

// view renderer
$config['renderer'] = function ($container) {
	return new Slim\Views\PhpRenderer($container['settings']['template']['path']);
};

// Flash messages
// $config['flash'] = function ($container) {
//     return new \Slim\Flash\Messages;
// };

return $config;
