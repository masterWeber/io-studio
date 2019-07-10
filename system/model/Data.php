<?php
//Проверяем был ли вызван файл системой или напрямую. Перенаправляем на главную
defined("ACCESS") or die(header("location:/index.php"));

class Data {

  public $data;

  function __construct() {
    $this -> data = array(
      "pages" => array(
        "index" => "index",
        "home" => "home",
      ),
    );
  }
}
