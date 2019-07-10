<?php
class ControllerCommonHome {
  //Создаем метод загрузки главной
  public static function index() {

    echo 'class ControllerCommonHome';

    $view = new View();
    $view -> load("common/home");
  }
}
