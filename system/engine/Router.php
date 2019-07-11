<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

//https://io-studio.io/ru/portfolio/12/

class Router {

  private $controller;
  const PREFIX = 'Controller';

  public function run() {
    $parser = new URIParser();
    $uri = $parser -> parse();

    $routeString = implode("/", $uri['route']);

    if (!$parser -> detectLang()) {
      $this -> redirect($routeString);
    }

    $path = DIR_CONTROLLER . '/common/home';
    $controllerName = self::PREFIX . 'CommonHome';

    if (!empty($uri['route'])) {
      $path = $this -> getPath($uri['route']);
      $controllerName = $this -> getControllerName($path);
    }

    import($path);

    $this -> controller = new $controllerName();
    $this -> controller -> index();
  }

  public function redirect(string $route) {

    $route = Language::DEFAULT . "/" . $route;

    if (empty($this -> route)) {
      $route = Language::DEFAULT ;
    }

    header("location:/{$route}/");
  }

  private function getPath( array $route) {
    $path = DIR_CONTROLLER . implode("/", $route) . "/";

    return $path;
  }

  private function getControllerName(string $path ) {
    $controllerName = $path;


    return $controllerName;
  }

}
