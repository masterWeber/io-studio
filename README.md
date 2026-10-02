# io-studio.io

Сайт компании.

## Архитектура

Backend — самописный легковесный MVC-движок на PHP (front-controller, похож по духу на OpenCart):

- `source/app/system/app.php` — точка входа: поднимает `Registry` и кладёт в него `DB`, `Language`, `Loader`, `Response`, `Router`, после чего вызывает `Router::run()`.
- `source/app/system/engine/` — ядро движка:
  - `Registry` — простой DI-контейнер (сервис-локатор) для шаринга объектов между контроллерами/моделями/видами.
  - `Controller`, `Model`, `Loader` — базовые классы контроллеров/моделей и загрузчик, через который контроллер подключает модели и рендерит виды.
  - `Language` — работа с локализацией.
- `source/app/system/library/` — инфраструктурные классы: `Router` (разбор URL и диспетчеризация в контроллер), `URL`, `DB`, `Response`, `mail`.
- `source/app/controllers/`, `source/app/models/`, `source/app/views/` — классическая связка MVC, сгруппированная по разделам (`common`, `information`, `mail`, `error`). Контроллер `Controller<Route>` ищется по пути из URL.
- `source/app/languages/{ru,en}/` — переводы, разложенные по тем же разделам, что и контроллеры/виды.

Роутинг (`Router.php`): URL разбирается на `lang/route/param`; язык всегда присутствует первым сегментом (при его отсутствии — redirect на язык по умолчанию), `route` преобразуется в имя класса контроллера и файл в `controllers/`, параметры пути передаются в `index()` контроллера. Неизвестный маршрут уходит в `error/not_found`.

Frontend — статические ассеты (`source/assets/css`, `source/assets/js`, `source/images`), которые вместе с `app/` и выбранными vendor-файлами (swiper) копируются и собираются Gulp-пайплайном (`gulpfile.js`) в `build/`: CSS проходит через PostCSS/cssnext/autoprefixer/cssnano, JS — через Babel и uglify.

## Структура проекта

- `source/` — исходники сайта
  - `app/` — PHP-движок, views/controllers/models/languages (см. «Архитектура»)
  - `assets/css`, `assets/js` — стили и скрипты
  - `images/` — изображения
- `build/` — собранная версия сайта (генерируется сборкой)
- `gulpfile.js` — сборка проекта (gulp)

## Разработка

Установка зависимостей:

```bash
npm install
```

Сборка проекта в `build/`:

```bash
npx gulp
```
