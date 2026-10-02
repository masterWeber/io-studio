<section class="service">
    <div class="service__card card">
        <header class="card__header">
            <h2 class="card__title"><?= $service_title_landing ?></h2>
            <p class="card__subtitle"><?= $service_subtitle_landing ?></p>
        </header>
        <picture class="card__background">
            <source srcset="/images/service/ice-cream_small.webp" media="(max-width: 450px)" type="image/webp">
            <source srcset="/images/service/ice-cream_medium.webp" media="(max-width: 700px)" type="image/webp">
            <source srcset="/images/service/ice-cream.webp" type="image/webp">
            <source srcset="/images/service/ice-cream_small.png" media="(max-width: 450px)" type="image/png">
            <source srcset="/images/service/ice-cream_medium.png" media="(max-width: 700px)" type="image/png">
            <img class="card__background-img" src="/images/service/ice-cream.png" alt="background">
        </picture>
        <footer class="card__footer">
            <button class="button button_transparent md-trigger" data-modal="order-dialog"
                    aria-label="<?= $order_button ?>">
                <?= $order_button ?>
            </button>
            <a class="button button_transparent" href="<?= $link_service ?>">
                <?= $details_button ?>
            </a>
        </footer>
    </div>
    <div class="service__card card">
        <header class="card__header">
            <h2 class="card__title"><?= $service_title_shop ?></h2>
            <p class="card__subtitle"><?= $service_subtitle_shop ?></p>
        </header>
        <picture class="card__background">
            <source srcset="/images/service/girl_small.webp" media="(max-width: 450px)" type="image/webp">
            <source srcset="/images/service/girl_medium.webp" media="(max-width: 700px)" type="image/webp">
            <source srcset="/images/service/girl.webp" type="image/webp">
            <source srcset="/images/service/girl_small.png" media="(max-width: 450px)" type="image/png">
            <source srcset="/images/service/girl_medium.png" media="(max-width: 700px)" type="image/png">
            <img class="card__background-img" src="/images/service/girl.png" alt="background">
        </picture>
        <footer class="card__footer">
            <button class="button button_transparent md-trigger" data-modal="order-dialog"
                    aria-label="<?= $order_button ?>">
                <?= $order_button ?>
            </button>
            <a class="button button_transparent" href="<?= $link_service ?>">
                <?= $details_button ?>
            </a>
        </footer>
    </div>
    <div class="service__card card">
        <header class="card__header">
            <h2 class="card__title"><?= $service_title_corporate ?></h2>
            <p class="card__subtitle"><?= $service_subtitle_corporate ?></p>
        </header>
        <picture class="card__background">
            <source srcset="/images/service/phone.webp" type="image/webp">
            <img class="card__background-img" src="/images/service/phone.png" alt="background">
        </picture>
        <footer class="card__footer">
            <button class="button button_transparent md-trigger" data-modal="order-dialog"
                    aria-label="<?= $order_button ?>">
                <?= $order_button ?>
            </button>
            <a class="button button_transparent" href="<?= $link_service ?>">
                <?= $details_button ?>
            </a>
        </footer>
    </div>
    <div class="service__card card">
        <header class="card__header">
            <h2 class="card__title"><?= $service_title_video ?></h2>
            <p class="card__subtitle"><?= $service_subtitle_video ?></p>
        </header>
        <picture class="card__background">
            <source srcset="/images/service/3d_small.webp" media="(max-width: 450px)" type="image/webp">
            <source srcset="/images/service/3d_medium.webp" media="(max-width: 700px)" type="image/webp">
            <source srcset="/images/service/3d.webp" type="image/webp">
            <source srcset="/images/service/3d_small.png" media="(max-width: 450px)" type="image/png">
            <source srcset="/images/service/3d_medium.png" media="(max-width: 700px)" type="image/png">
            <img class="card__background-img" src="/images/service/3d.png" alt="background">
        </picture>
        <footer class="card__footer">
            <button class="button button_transparent md-trigger" data-modal="order-dialog"
                    aria-label="<?= $order_button ?>">
                <?= $order_button ?>
            </button>
            <a class="button button_transparent" href="<?= $link_service ?>">
                <?= $details_button ?>
            </a>
        </footer>
    </div>
</section>
