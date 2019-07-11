<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

//Системные файлы
const DIR_SYSTEM = PATH . "/system";
//Движок
const DIR_ENGINE = DIR_SYSTEM . "/engine";
//Библиотека
const DIR_LIBRARY = DIR_SYSTEM . "/library";
//Контроллеры
const DIR_CONTROLLER = PATH . "/controller";
//Локализации
const DIR_LANGUAGE = PATH . "/language";
//Модели
const DIR_MODEL = PATH . "/model";
//Виды
const DIR_VIEW = PATH . "/view";

require_once DIR_SYSTEM . '/import.php';

import(DIR_ENGINE . "/*");
import(DIR_LIBRARY . "/*");

