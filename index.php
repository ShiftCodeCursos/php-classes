<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
	$response->write("Seja bem vindo a Shift Code");
	return $response;
});

$app->get('/hello[/{name}]', function ($request, $response, $args) {
	$response->write("Hello, " . $args['name']);
	return $response;
})->setArgument('name', 'World!');

$app->run();