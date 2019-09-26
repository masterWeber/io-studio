<div class="face">
    <div class="component-logo">
        <video class="component-logo__video" poster="/assets/video/sea/poster.jpg" autoplay loop preload="auto"
               muted>
            <source src="/assets/video/sea/sea_vp8.webm" type="video/webm"/>
            <source src="/assets/video/sea/sea_hevc.mp4" type="video/mp4"/>
            <source src="/assets/video/sea/sea_avc.mp4" type="video/mp4"/>
        </video>

        <svg class="component-logo__mask" viewBox="0 0 910 645" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="/images/mask_io.svg#mask"></use>
        </svg>
    </div>

    <div class="face__content">
        <p class="face__title">
            <?= $face_title ?>
        </p>
        <p class="face__subtitle">
            <?= $face_subtitle ?>
        </p>
        <button class="button md-trigger" data-modal="order-dialog"><?= $hire_us_button ?></button>
    </div>

    <p class="face__count">
        <?= $projects_count ?>
    </p>

    <p class="face__version version">
        <span class="version__text">Version</span>
        <span class="version__number">1.0</span>
    </p>

    <div class="face__lang lang-toggle">
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

    <div class="face__hint"></div>

</div>
