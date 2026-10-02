# io-studio.io

Сайт компании.

## Структура проекта

- `source/` — исходники сайта
  - `app/` — views, controllers, models, languages (шаблоны и логика страниц)
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
