<?php
$config = [];

$config['path'] = realpath(__DIR__ . '/../');

$config['environment.name'] = function($container) {
    return (getenv('ENV') ?: 'development');
};
$config['settings']['displayErrorDetails'] = ('development' === (getenv('ENV') ?: 'development'));

$config['settings']['logger'] = [
	'name' => getenv('NAME') ?: 'app',
	'path' => $config['path'] . '/logs/' . (getenv('NAME') ?: 'app') . '.log'
];

$config['settings']['template']['path'] = $config['path'] . '/src/Template/';

return $config;
