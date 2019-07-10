<?php
//Проверяем был ли вызван файл системой или напрямую. Перенаправляем на главную
defined("ACCESS") or die(header("location:/index.php"));

class View {

  public function load($name) {
    $path = VIEW . "/$name.php";

    //Проверяем есть ли такой вид. Если есть, подрубаем
    if (file_exists($path)) {
      require_once($path);
    } else {
      //Иначе загружаем дефолтный вид
      $data = new Data();
      $path = VIEW . "/" . $data -> data["pages"]["default"] . ".php";
      require_once($path);
    }
  }
}
