<?php
//Проверяем был ли вызван файл системой или напрямую. Перенаправляем на главную
defined("ACCESS") or die(header("location:/index.php"));

class Router {

  private $controller;

  public function run() {

    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === '/') {
      require_once 'common/home.php';
      $controllerName = 'ControllerCommonHome';
    } else {

      $route = explode('/', $uri);
      print_r($route);

      require_once 'common/home.php';
      $controllerName = 'ControllerCommonHome';
    }

    $this -> controller = new $controllerName();
    $this -> controller -> index();
  }

}
