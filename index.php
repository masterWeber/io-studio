<?php

const PATH = __DIR__ . '/app/';

require_once(PATH . 'system/bootstrap.php');

$router = new Router();
$router -> run();
