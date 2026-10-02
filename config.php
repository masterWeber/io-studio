<?php
//Переменные окружения (секреты не хранятся в репозитории, см. .env.example)
$env = is_file(__DIR__ . '/.env') ? parse_ini_file(__DIR__ . '/.env', false, INI_SCANNER_RAW) : [];
function env(string $key, $default = null)
{
    global $env;
    return $env[$key] ?? $default;
}

//Язык
const LANGUAGES = ['ru', 'en'];

//Маршруты
const ROUTES_MAP = [
    'index' => 'common/home',
    'service' => 'information/service',
    'contacts' => 'information/contacts',
    'portfolio' => 'information/portfolio',
    'order' => 'mail/order',
    'feedback' => 'mail/feedback',
    '404' => 'error/not_found'
];

//База данных
define('DB_ADAPTER', env('DB_ADAPTER', 'PDO'));
define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_NAME', env('DB_NAME', 'io'));
define('DB_PORT', env('DB_PORT', '3306'));
define('DB_USER', env('DB_USER', 'root'));
define('DB_PASSWORD', env('DB_PASSWORD'));

//Mail
define('EMAIL', env('EMAIL', 'info@io-studio.io'));