<?php

$registry = new Registry();

$uri = new URI($registry);
$registry->set('uri', $uri);

$url = new Url($registry);
$registry->set('url', $url);

$db = new DB(DB_ADAPTER, DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$registry->set('db', $db);

$language = new Language($registry);
$registry->set('language', $language);

$loader = new Loader($registry);
$registry->set('load', $loader);

$response = new Response();
$registry->set('response', $response);

$router = new Router($registry);
$router->run();

$response->output();
