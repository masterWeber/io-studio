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

<link rel="stylesheet" href="/assets/css/style.min.css?v=1.0.0">
<script src="/assets/js/common.min.js?v=1.0.0" defer></script>
</body>
</html>
