<?= $header ?>

<main class="page__content">
    <div class="contacts container">

        <div class="contacts__text-block">
            <h1 class="title title_large title_high"><?= $contacts ?></h1>
            <ul class="contacts__list list">
                <li class="contacts__list-item list__item">
                    <span class="text text_wide"><?= $contacts_main ?></span>
                    <a class="contacts__link link text text_medium text_wide"
                       href="mailto:info@io-studio.ru">info@io-studio.ru</a>
                </li>
                <li class="contacts__list-item list__item">
                    <span class="text text_wide"><?= $contacts_support ?></span>
                    <a class="contacts__link link text text_medium text_wide"
                       href="https://wa.me/79234567890">whatsapp</a>
                </li>
                <li class="contacts__list-item list__item">
                    <span class="text text_wide"><?= $contacts_skype ?></span>
                    <a class="contacts__link link text text_medium text_wide"
                       href="skype:io-studio">io-studio</a>
                </li>
            </ul>
        </div>

        <div class="contacts__text-block contacts__text-block_shifted">
            <h2 class="title title_large"><?= $rules ?></h2>
            <ul class="contacts__list list">
                <li class="contacts__list-item list__item">
                    <span class=" text text_medium text_wide"><?= $rules_timeline ?></span>
                </li>
                <li class="contacts__list-item list__item">
                    <span class=" text text_medium text_wide"><?= $rules_style ?></span>
                </li>
                <li class="contacts__list-item list__item">
                    <span class=" text text_medium text_wide"><?= $rules_code ?></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="contacts container">
        <div class="contacts__text-block">
            <p class="text text_wide">
                <?= $contacts_text ?>
            </p>
        </div>
    </div>
    <?= $feedback ?>
</main>

<?= $footer ?>
