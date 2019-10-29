<h1>Форма 'Нанаять нас'.</h1>

<p>Имя: <b><?= $name ?></b>;</p>
<p>E-mail: <b><?= $email ?></b>;</p>

<ul>
    <?php if ($landing) { ?>
        <li>Landing page</li>
    <?php } ?>
    <?php if ($shop) { ?>
        <li>Интернет магазин</li>
    <?php } ?>
    <?php if ($corporate) { ?>
        <li>Корпоративный</li>
    <?php } ?>
    <?php if ($video) { ?>
        <li>Видео монтаж и 3D</li>
    <?php } ?>
</ul>