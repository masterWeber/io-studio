<?php

//Системные файлы
const DIR_SYSTEM = PATH . 'system/';
//Движок
const DIR_ENGINE = DIR_SYSTEM . 'engine/';
//Библиотека
const DIR_LIBRARY = DIR_SYSTEM . 'library/';
//Контроллеры
const DIR_CONTROLLER = PATH . 'controllers/';
//Локализации
const DIR_LANGUAGE = PATH . 'languages/';
//Модели
const DIR_MODEL = PATH . 'models/';
//Виды
const DIR_VIEW = PATH . 'views/';

require_once(DIR_SYSTEM . 'import.php');

import(DIR_ENGINE . '*');
import(DIR_LIBRARY . '*');
