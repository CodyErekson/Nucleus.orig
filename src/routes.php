<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
	// Sample log message
	$this->logger->info("Slim-Skeleton '/' route");

	//echo $this->get('environment.name');
	//print_r($this->get('settings')['logger']);

	// Render index view
	return $this->renderer->render($response, 'index.phtml', $args);
});