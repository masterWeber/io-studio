<?php
//Разрешение на вызов файлов только из одной точки входа.
const ACCESS = true;

const PATH = __DIR__ . '/';

require_once(PATH . 'system/bootstrap.php');

$router = new Router();
$router -> run();
