<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>io.</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/app/views/assets/css/common.blocks/style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600&display=swap&subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/image/icons/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/image/icons/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="194x194" href="/image/icons/favicon/favicon-194x194.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/image/icons/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/image/icons/favicon/favicon-16x16.png">
  <link rel="manifest" href="/image/icons/favicon/site.webmanifest">
  <link rel="mask-icon" href="/image/icons/favicon/safari-pinned-tab.svg" color="#000000">
  <meta name="apple-mobile-web-app-title" content="io-studio.io">
  <meta name="application-name" content="io-studio.io">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/image/icons/favicon/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script src="/app/views/assets/js/common.js" defer></script>
</head>
<body class="page">
<header class="header">
  <a class="logo" href="/" title="Главная">
    <picture class="logo__img-container">
      <source srcset="/image/logo/logo.svg" type="image/svg+xml">
      <img class="logo__img" src="/image/logo/logo.png" alt="Логотип io-studio">
    </picture>
  </a>
  <div class="toolbar">
    <button class="button md-trigger" data-modal="order-dialog"><?=$hire_us?></button>
    <div class="header__social social">
      <a class="social__item" href="https://www.facebook.com/" title="Мы в Facebook">fb</a>
      <a class="social__item" href="https://www.behance.net/" title="Мы в Behance">be</a>
      <a class="social__item" href="https://www.instagram.com/" title="Мы в Instagram">ig</a>
    </div>
    <button class="bubble-button md-trigger" data-modal="navigation-dialog" title="Меню">
      <span class="bubble-button__element bubble-button__element_first"></span>
      <span class="bubble-button__element bubble-button__element_second"></span>
      <span class="bubble-button__element bubble-button__element_third"></span>
    </button>
  </div>
  <div class="nav md" id="navigation-dialog">
    <button class="bubble-button bubble-button_horizontal md-close">
      <span class="bubble-button__element bubble-button__element_first"></span>
      <span class="bubble-button__element bubble-button__element_second"></span>
      <span class="bubble-button__element bubble-button__element_third"></span>
      <span class="bubble-button__text">закрыть</span>
    </button>
    <div class="menu">
      <a class="menu__item" href="/portfolio/">Портфолио</a>
      <a class="menu__item" href="/service/">Услуги</a>
      <a class="menu__item" href="/contacts/">Контакты</a>
    </div>
  </div>
</header>
