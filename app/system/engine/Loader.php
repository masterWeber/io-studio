<?php

class Loader {
  protected $registry;

  public function __construct(Registry &$registry) {
    $this -> registry = $registry;
  }

  public function model(string $route, string $action = 'index', array $data = []) {
    $path = DIR_MODEL . "$route.php";

    try {
      require_once($path);
    } catch (Exception $e) {
      echo "Ошибка: {$e}";
    }

    $class = 'Model' . preg_replace('/\//i', '', $route);

    $model = new $class($this -> registry);

    return $model -> $action($data);
  }

  public function view(string $route, array $data = []) {
    $path = DIR_VIEW . "$route.php";

    $lang = $this -> registry -> get('language') -> getCurrentLang();
    $genericData = $this -> language($lang);

    $currentData = $this -> language($route);

    $data = array_merge($genericData, $currentData, $data);
    extract($data);

    ob_start();
    if (file_exists($path)) {
      require_once($path);
    } else {
      echo 'path is\'t defined';
    }
    $output = ob_get_clean();

    return $output;
  }

  public function controller(string $route, string $action = 'index', array $data = []) {
    $path = DIR_CONTROLLER . "$route.php";

    if (file_exists($path)) {
      require_once($path);
    } else {
      echo 'path is\'t defined';
    }

    $class = 'Controller' . preg_replace('/\//i', '', $route);
    $controller = new $class($this -> registry);

    return $controller -> $action($data);
  }

  public function language(string $route) {
    $language = $this -> registry -> get('language');
    $lang = $language -> getCurrentLang();

    $path = DIR_LANGUAGE . "$lang/$route.php";

    //Массив переменных для языка
    $_ = [];

    if (file_exists($path)) {
      require_once($path);
    }

    return $_;
  }
}
