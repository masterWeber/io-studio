<?php

class Router extends Controller {

  private $controller;
  const ROUTES_MAP = [
    'index' => 'common/home',
    'service' => 'common/service',
    'contacts' => 'information/contacts',
    'portfolio' => 'information/portfolio',
    '404' => 'error/404'
  ];
  const PREFIX = 'Controller';

  public function run() {
    $uriParser = new URIParser();
    $uri = $uriParser -> parse();

    $routeUri = implode("/", $uri['route']);

    if (!$uriParser -> detectLang()) {
      $this -> redirect($routeUri);
    }

    $path = DIR_CONTROLLER . self::ROUTES_MAP['index'];
    $currentClass = preg_replace('/\//i', '', self::ROUTES_MAP['index']);
    $class = self::PREFIX . $currentClass;

    if (!empty($uri['route'])) {
      $detailedRoute = $this -> parseRoute($routeUri);

      $path = $detailedRoute['path'];
      $class = $detailedRoute['controller_name'];
    }

    try {
      import($path);
    } catch (Exception $e) {
      $this -> redirect('404');
    }

    $this -> controller = new $class($this -> registry);
    $this -> controller -> index();
  }

  public function redirect(string $route) {

    $fullRoute = Language::DEFAULT . "/" . $route;

    if (empty($route)) {
      $fullRoute = Language::DEFAULT;
    }

    header("location:/{$fullRoute}/");
  }

  private function parseRoute(string $route) {

    if (!key_exists($route, self::ROUTES_MAP)) {
      $this -> redirect('404');
    }

    $path = DIR_CONTROLLER . self::ROUTES_MAP[$route];

    $output = [
      'path' => $path,
      'controller_name' => self::PREFIX . preg_replace('/\//i', '', self::ROUTES_MAP[$route])
    ];

    return $output;
  }

}
