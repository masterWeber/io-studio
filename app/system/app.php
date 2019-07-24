<?php

$registry = new Registry();

$loader = new Loader($registry);
$registry->set('load', $loader);

$response = new Response();
$registry->set('response', $response);

$router = new Router($registry);
$router -> run();
