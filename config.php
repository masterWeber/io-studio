<?php
//Режим разработки
const DEV = true;

//Язык
const LANGUAGES = ['ru', 'en'];
const DEFAULT_LANGUAGE = 'ru';

//Маршруты
const ROUTES_MAP = [
  'index' => 'common/home',
  'service' => 'information/service',
  'contacts' => 'information/contacts',
  'portfolio' => 'information/portfolio',
  '404' => 'error/404'
];

//База данных
const DB_ADAPTER = 'PDO';
const DB_HOST = 'localhost';
const DB_NAME = 'io';
const DB_PORT = '3306';
const DB_USER = 'root';
const DB_PASSWORD = '000000';