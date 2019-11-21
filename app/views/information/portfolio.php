<?= $header ?>

<main class="page__content">
    <div class="container">
        <div class="project-preview-swiper swiper-container">
            <ul class="project-preview-swiper__wrapper swiper-wrapper">
                <?php foreach ($projects as $project) { ?>

                    <li class="project-preview-swiper__slide swiper-slide">
                        <a class="project-preview-swiper__link" href="<?= $project['link'] ?>">
                            <picture class="project-preview">
                                <img class="project-preview__img"
                                     src="<?= $project['thumbnail'] ?>"
                                     alt="<?= $project['title'] ?>">
                            </picture>
                        </a>
                    </li>

                <?php } ?>
            </ul>
            <div class="project-preview-swiper_pagination swiper-pagination"></div>
        </div>

        <div class="project-info-swiper swiper-container">
            <ul class="project-info-swiper__wrapper swiper-wrapper">
                <?php
                $i = 1;
                foreach ($projects as $project) {
                    $count = $i < 10 ? "0{$i}" : "{$i}";
                    $i++;
                    ?>
                    <li class="project-info-swiper__slide swiper-slide">
                        <div class="project-info">
                            <span class="project-info__count"><?= $count ?></span>
                            <p class="project-info__title title"><?= $project['title'] ?></p>
                            <p class="project-info__description text"><?= $project['short_description'] ?></p>
                            <a class="project-info__button button button_transparent"
                               href="<?= $project['link'] ?>">
                                <?= $view_button ?>
                            </a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</main>
<link rel="stylesheet" href="/assets/css/vendor/swiper/swiper.min.css">
<script src="/assets/js/vendor/swiper/swiper.min.js" defer></script>
<script src="/assets/js/swiper-init.min.js" defer></script>
<?= $footer ?>
