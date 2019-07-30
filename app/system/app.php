<?php

$registry = new Registry();

$uri = new URI($registry);
$registry->set('uri', $uri);

$url = new Url($registry);
$registry->set('url', $url);

$language = new Language($registry);
$registry->set('language', $language);

$loader = new Loader($registry);
$registry->set('load', $loader);

$response = new Response();
$registry->set('response', $response);

$router = new Router($registry);
$router->run();

$response->output();
