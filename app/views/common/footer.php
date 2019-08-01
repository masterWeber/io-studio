<footer class="footer">
    <div class="copyright">
        <span class="copyright__company">io studio</span>
        <span class="copyright__date"><?= (new DateTime())->format('Y') ?> ©</span>
    </div>
    <div class="support">
        <span class="support__text"><?= $support_text ?></span>
        <a class="support__link" href="https://wa.me/79234567890">WhatsApp</a>
    </div>
</footer>

<?php require_once('dialogs.php') ?>

<?php if (DEV) { ?>
    <link rel="stylesheet" href="/assets/css/common.blocks/style.css">
<?php } else { ?>
    <link rel="stylesheet" href="/assets/css/style.min.css?v=1.0.0">
<?php } ?>

<?php if (DEV) { ?>
    <script src="/assets/js/common/common.js" defer></script>
<?php } else { ?>
    <script src="/assets/js/common.min.js?v=1.0.0" defer></script>
<?php } ?>
</body>
</html>
