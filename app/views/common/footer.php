<footer class="footer">
    <div class="copyright">
        <span class="copyright__company">io studio</span>
        <span class="copyright__date"><?= (new DateTime())->format('Y') ?> ©</span>
    </div>
    <div class="support">
        <span class="support__text"><?= $support_text ?></span>
        <a class="support__link" href="https://wa.me/89161341131">WhatsApp</a>
    </div>
    <button class="button-scroll-to" title="Наверх"></button>
</footer>

<?php require_once('dialogs.php') ?>


<?= vite([
    'resources/css/style.css',
    'resources/js/common/common.js',
]) ?>
</body>
</html>
