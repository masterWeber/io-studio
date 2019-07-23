<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <meta name="description" content="<?=$description?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (DEV) {?>
    <link rel="stylesheet" href="/assets/css/common.blocks/style.css">
  <?php } else {?>
    <link rel="stylesheet" href="/assets/css/style.min.css">
  <?php } ?>
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600&display=swap&subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="194x194" href="/images/icons/favicon/favicon-194x194.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/images/icons/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon/favicon-16x16.png">
  <link rel="manifest" href="/images/icons/favicon/site.webmanifest">
  <link rel="mask-icon" href="/images/icons/favicon/safari-pinned-tab.svg" color="#000000">
  <meta name="apple-mobile-web-app-title" content="io-studio.io">
  <meta name="application-name" content="io-studio.io">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/image/icons/favicon/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <?php if (DEV) {?>
    <script src="/assets/js/common.js" defer></script>
  <?php } else {?>
    <script src="/assets/js/common.min.js" defer></script>
  <?php } ?>
</head>
<body class="page">
<header class="header">
  <a class="logo" href="/" title="Главная">
    <picture class="logo__img-container">
      <source srcset="/images/logo/logo.svg" type="image/svg+xml">
      <img class="logo__img" src="/images/logo/logo.png" alt="Логотип io-studio">
    </picture>
  </a>
  <div class="toolbar">
    <button class="button md-trigger" data-modal="order-dialog"><?=$hire_us_btn?></button>
    <div class="header__social social">
      <a class="social__item" href="https://facebook.com/" title="Мы в Facebook" target="_blank">fb</a>
      <a class="social__item" href="https://behance.net/" title="Мы в Behance" target="_blank">be</a>
      <a class="social__item" href="https://instagram.com/" title="Мы в Instagram" target="_blank">ig</a>
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
      <span class="bubble-button__text"><?=$close_btn?></span>
    </button>
    <div class="menu">
      <a class="menu__item" href="/portfolio/"><?=$portfolio?></a>
      <a class="menu__item" href="/service/"><?=$service?></a>
      <a class="menu__item" href="/contacts/"><?=$contacts?></a>
    </div>
  </div>
</header>
