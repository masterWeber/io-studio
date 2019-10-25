<?php if ($technologies) { ?>
    <div class="services container">
        <div class="services__content">

            <h2 class="title title_large title_high"><?= $title ?></h2>
            <div class="technologies">
                <?php foreach ($technologies as $technology) { ?>

                    <picture class="technologies__item">
                        <img class="technologies__image" src="<?= $technology['image'] ?>"
                             title="<?= $technology['title'] ?>" alt="<?= $technology['title'] ?>">
                    </picture>

                <?php } ?>
            </div>

        </div>
    </div>
<?php } ?>