<?php

class Loader {
  public function model(string $route) {
    $path = DIR_MODEL . "/$route.php";

    try {
      require_once($path);
    } catch (Exception $e) {
      echo "Ошибка: {$e}";
    }
  }

  public function view(string $route, array $data) {
    $path = DIR_VIEW . "/$route.php";
    extract($data);

    try {
      require_once($path);
    } catch (Exception $e) {
      echo "Ошибка: {$e}";
    }
  }

  public function controller(string $route, array $data) {
    $path = DIR_MODEL . "/$route.php";
    extract($data);

    try {
      require_once($path);
    } catch (Exception $e) {
      echo "Ошибка: {$e}";
    }
  }

  public function language(string $route) {
    $parser = new URIParser();
    $uri = $parser -> parse();
    $lang = $uri['lang'];

    $path = DIR_LANGUAGE . "/$lang/$route.php";

    //Массив переменных для языка
    $_ = [];

    try {
      require_once($path);
      return $_;
    } catch (Exception $e) {
      echo "Ошибка: {$e}";
      return [];
    }
  }
}
