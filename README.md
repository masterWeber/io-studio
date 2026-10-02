# io-studio.io

Сайт компании.

## Архитектура

Backend — самописный легковесный MVC-движок на PHP (front-controller, похож по духу на OpenCart):

- `app/system/app.php` — точка входа: поднимает `Registry` и кладёт в него `DB`, `Language`, `Loader`, `Response`, `Router`, после чего вызывает `Router::run()`.
- `app/system/engine/` — ядро движка:
  - `Registry` — простой DI-контейнер (сервис-локатор) для шаринга объектов между контроллерами/моделями/видами.
  - `Controller`, `Model`, `Loader` — базовые классы контроллеров/моделей и загрузчик, через который контроллер подключает модели и рендерит виды.
  - `Language` — работа с локализацией.
- `app/system/library/` — инфраструктурные классы: `Router` (разбор URL и диспетчеризация в контроллер), `URL`, `DB`, `Response`, `mail`, `vite` (хелпер для подключения собранных ассетов).
- `app/controllers/`, `app/models/`, `app/views/` — классическая связка MVC, сгруппированная по разделам (`common`, `information`, `mail`, `error`). Контроллер `Controller<Route>` ищется по пути из URL.
- `app/languages/{ru,en}/` — переводы, разложенные по тем же разделам, что и контроллеры/виды.

Роутинг (`Router.php`): URL разбирается на `lang/route/param`; язык всегда присутствует первым сегментом (при его отсутствии — redirect на язык по умолчанию), `route` преобразуется в имя класса контроллера и файл в `controllers/`, параметры пути передаются в `index()` контроллера. Неизвестный маршрут уходит в `error/not_found`.

Frontend — собирается [Vite](https://vitejs.dev) (через `laravel-vite-plugin`, без самого Laravel — только Node-плагин для manifest/hot-file конвенций):

- `resources/css`, `resources/js` — исходные стили (BEM, `common.blocks`/`current.blocks`) и скрипты.
- CSS проходит через PostCSS (`postcss.config.cjs`): `autoprefixer`, `postcss-import`, `postcss-preset-env`, `postcss-sort-media-queries`, `cssnano`.
- `public/` — единственный докрут, и в деве, и в проде: `index.php`, статика (`images/`, `assets/video`, вендорные `assets/css|js/vendor/swiper`), и каталог `public/build/` с результатом сборки (хэшированные CSS/JS + `manifest.json`).
- PHP-функция `vite()` (`app/system/library/vite.php`) подключает ассеты по этому манифесту — аналог Laravel-директивы `@vite()`: если есть файл `public/hot` — значит запущен `npm run dev`, и она отдаёт теги на dev-сервер Vite (с HMR); иначе читает `public/build/manifest.json` и отдаёт хэшированные пути. Используется в `footer.php` (`style.css`+`common.js`) и `portfolio.php` (`swiper-init.js`).

## Структура проекта

- `app/` — PHP-движок (см. «Архитектура»)
- `resources/` — исходные CSS/JS, обрабатываются Vite
- `public/` — докрут веб-сервера: статика + собранные ассеты (`public/build/`, генерируется)
- `config.php`, `.env` — конфигурация и секреты (вне докрута)

## Разработка

Установка зависимостей:

```bash
npm install
```

Секреты (пароль БД, почта и т.п.) не хранятся в репозитории — скопируй `.env.example` в `.env` и заполни своими значениями:

```bash
cp .env.example .env
```

Веб-сервер должен смотреть докрутом в `public/`.

Разработка с hot-reload (Vite dev-сервер, порт 5173):

```bash
npm run dev
```

Прод-сборка ассетов в `public/build/`:

```bash
npm run build
```
