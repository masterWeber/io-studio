<?php
//Проверяем был ли вызван файл системой или напрямую. Перенаправляем на главную
defined("ACCESS") or die(header("location:/index.php"));

//Создаем константы

//Системные файлы
const SYSTEM = PATH . "/system";
//Модели
const MODEL = SYSTEM . "/model";
//Контроллеры
const CONTROLLER = SYSTEM . "/controller";
//Виды
const VIEW = SYSTEM . "/view";

//Подгружаем все файлы

//Файл данных
include_once MODEL . "/Data.php";
//Работа с видами
include_once VIEW . "/View.php";
//Контроллер
include_once CONTROLLER . "/Router.php";
