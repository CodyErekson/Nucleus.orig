<?php
// Application middleware
// e.g: $app->add(new \gabriel403\SlimJson);

// JSON Web Token
$app->add(new \Slim\Middleware\JwtAuthentication([
	"secret" => getenv("JWT_SECRET"),
	"secure" => true,
	"relaxed" => ["localhost", "nucleus.local"]
]));