<?= $header ?>
    <main class="page__content">
        <div class="container" style="text-align: center">
            <?php if ($success) { ?>
                <h1 class="title title_large"><?= $success_text ?></h1>
            <?php } else { ?>
                <h1 class="title title_large"><?= $fail_text ?></h1>
            <?php } ?>
        </div>
    </main>
<?= $footer ?>