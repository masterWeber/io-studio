<div class="face">
    <div class="component-logo">
        <video class="component-logo__video" autoplay loop preload="auto" muted>
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
        <h1 class="face__subtitle">
            <?= $face_subtitle ?>
        </h1>
        <button class="button md-trigger" data-modal="order-dialog"><?= $hire_us_button ?></button>
    </div>

    <a class="face__count" href="<?= $link_portfolio ?>">
        <?= $projects_count ?>
    </a>

    <p class="face__version version">
        <span class="version__text">Version</span>
        <span class="version__number">1.0</span>
    </p>

    <div class="face__hint"></div>

</div>
