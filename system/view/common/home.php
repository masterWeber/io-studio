<? require_once 'header.php' ?>

  <main class="page__content">
    <section class="face">
      <div class="component-logo">
        <video class="component-logo__video" poster="/system/view/assets/video/sea/poster.jpg" autoplay loop preload="auto" muted >
          <source src="/system/view/assets/video/sea/sea_vp8.webm" type="video/webm"/>
          <source src="/system/view/assets/video/sea/sea_hevc.mp4" type="video/mp4"/>
          <source src="/system/view/assets/video/sea/sea_avc.mp4" type="video/mp4"/>
        </video>
        <img class="component-logo__mask" src="/system/view/assets/img/mask.svg" alt="">
      </div>

      <div class="face__title-container">
        <p class="face__title">
          Дизайн+<br>Разработка
        </p>
        <p class="face__subtitle">
          Создаём востребованные и качественные цифровые продукты.
        </p>
      </div>

    </section>

    <section class="service">
      <div class="service__card card">
        <header class="card__header">
          <h2 class="card__title">Landing page</h2>
          <p class="card__subtitle">от 10 рабочих дней</p>
        </header>
        <picture class="card__background">
          <img class="card__background-img" src="/system/view/assets/img/service/1.png" alt="background">
        </picture>
        <footer class="card__footer">
          <a class="button button_transparent" href="/">Заказать</a>
          <a class="button button_transparent" href="/">Подробнее</a>
        </footer>
      </div>
    </section>

    <? require_once 'feedback.php' ?>
  </main>

<? require_once 'footer.php' ?>
