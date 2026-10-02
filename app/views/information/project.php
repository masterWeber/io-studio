<?= $header ?>
<main class="page__content">

    <div class="project container">
        <div class="project__header">
            <h1 class="project__title title title_large"><?= $title ?></h1>
        </div>

        <div class="project__content">

            <div class="project__text-block project__text-block_service">
                <h2 class="project__subtitle title"><?= $title_service ?></h2>
                <p class="text text_wide"><?= $short_description ?></p>
            </div>

            <div class="project__text-block project__text-block_timeline">
                <h2 class="project__subtitle title"><?= $title_timeline ?></h2>
                <p class="text text_wide"><?= $timeline ?></p>
            </div>

            <div class="project__text-block project__text-block_description">
                <h2 class="project__subtitle title"><?= $title_description ?></h2>
                <p class="text text_wide"><?= $description ?></p>
            </div>

            <div class="project__text-block project__text-block_cost">
                <h2 class="project__subtitle title"><?= $title_cost ?> </h2>
                <p class="text text_medium text_wide number-with-spaces"><?= $price ?></p>
            </div>

        </div>

        <img class="project__image" src="<?= $image ?>" alt="<?= $title ?>">

        <div class="project__footer">
            <a class="project__button project__button_back button button_transparent"
               href="<?= $link_back_project ?>">
                <?= $back_project_button ?>
            </a>
            <?php if ($link_next_project) { ?>
                <a class="project__button project__button_next button button_transparent"
                   href="<?= $link_next_project ?>">
                    <?= $next_project_button ?>
                </a>
            <?php } ?>
        </div>

    </div>


</main>

<?= $footer ?>
