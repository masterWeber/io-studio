
<?= $header ?>

<main class="page__content">

    <div class="container not-found">
        <div class="not-found__element">
            <h1 class="title title_unbelievable title_high">404</h1>
        </div>
        <div class="not-found__footer">
            <p class="title not-found__element"><?= $text ?></p>
            <div class="not-found__element">
                <button class="button button_transparent" onclick="history.back();" >Назад</button>
                <a class="button button_transparent " href="<?= $homepage_link ?>">Home</a>
            </div>
            <p class="text not-found__element"><?= $error_message ?></p>
        </div>
    </div>

</main>

<?= $footer ?>