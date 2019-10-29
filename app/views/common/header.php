<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta property="og:locale" content="<?= $lang ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:url" content="<?= $base ?>">
    <meta property="og:site_name" content="io-studio">
    <meta property="og:image" content="https://io-studio.io/images/design+development.jpg">
    <meta property="og:image:secure_url" content="https://io-studio.io/images/design+development.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/images/icons/favicon/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/icons/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/icons/favicon/safari-pinned-tab.svg" color="#000000">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="apple-mobile-web-app-title" content="io-studio.io">
    <meta name="application-name" content="io-studio.io">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/image/icons/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="page">
<header class="header">
    <div class="header__group">
        <a class="logo" href="<?= $base ?>" title="<?= $home_link_title ?>">io.</a>
        <div class="lang-toggle">
            <?php if ($lang_checked) { ?>
                <span class="lang-toggle__text">Ru</span>
                <span class="lang-toggle__text lang-toggle__text_active">En</span>
            <?php } else { ?>
                <span class="lang-toggle__text lang-toggle__text_active">Ru</span>
                <span class="lang-toggle__text">En</span>
            <?php } ?>

            <a href="<?= $lang_link ?>" aria-label="Переключить язык">
                <div class="toggle toggle_narrow <?= $lang_checked ?>">
                    <div class="toggle__back"></div>
                    <div class="toggle__toggle"></div>
                </div>
            </a>

        </div>
    </div>
    <div class="toolbar">
        <button class="button md-trigger" data-modal="order-dialog"
                title="<?= $hire_us_button ?>">
            <?= $hire_us_button ?>
        </button>
        <div class="header__social social">
            <a class="social__item" href="https://facebook.com/" title="<?= $facebook_link_title ?>" target="_blank"
               rel="noreferrer">fb</a>
            <a class="social__item" href="https://behance.net/" title="<?= $behance_link_title ?>" target="_blank"
               rel="noreferrer">be</a>
            <a class="social__item" href="https://instagram.com/" title="<?= $instagram_link_title ?>" target="_blank"
               rel="noreferrer">ig</a>
        </div>
        <button class="bubble-button md-trigger" data-modal="navigation-dialog"
                title="<?= $menu_button_title ?>" aria-label="<?= $menu_button_title ?>">
            <span class="bubble-button__element bubble-button__element_first"></span>
            <span class="bubble-button__element bubble-button__element_second"></span>
            <span class="bubble-button__element bubble-button__element_third"></span>
        </button>
    </div>
    <?= $menu ?>
</header>
