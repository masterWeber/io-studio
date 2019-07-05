<footer class="footer">
  <div class="copyright">
    <span class="copyright__company">io studio</span>
    <span class="copyright__date"><?=(new DateTime())->format('Y')?> ©</span>
  </div>
  <div class="support">
    <span class="support__text">Поддержка</span>
    <a class="support__link" href="https://wa.me/79234567890">WhatsApp</a>
  </div>
</footer>

<div class="md" id="order-dialog">
  <button class="bubble-button bubble-button_horizontal md-close">
    <span class="bubble-button__element bubble-button__element_first"></span>
    <span class="bubble-button__element bubble-button__element_second"></span>
    <span class="bubble-button__element bubble-button__element_third"></span>
    <span class="bubble-button__text">закрыть</span>
  </button>
  <form action="" class="form">

    <header class="form__header">
      <p class="form__title">Готовы к сотрудничеству? Отлично, мы тоже</p>
    </header>

    <div class="form__group">
      <div class="input-field">
        <input class="input" id="order-dialog-name" name="name" type="text">
        <label class="label label_light label_placeholder" for="order-dialog-name">Имя</label>
      </div>
      <div class="input-field">
        <input class="input" id="order-dialog-email" name="email" type="email">
        <label class="label label_light label_placeholder" for="order-dialog-email">E-mail</label>
      </div>
    </div>

    <div class="form__toggle-group">

      <div class="toggle-container">
        <div class="toggle">
          <input class="native-checkbox" id="checkbox" type="checkbox" name="checkbox">
          <div class="toggle__back"></div>
          <div class="toggle__toggle"></div>
        </div>
        <label class="label label_light" for="checkbox">Landing page</label>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <input class="native-checkbox" id="checkbox" type="checkbox" name="checkbox">
          <div class="toggle__back"></div>
          <div class="toggle__toggle"></div>
        </div>
        <label class="label label_light" for="checkbox">Интернет магазин</label>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <input class="native-checkbox" id="checkbox" type="checkbox" name="checkbox">
          <div class="toggle__back"></div>
          <div class="toggle__toggle"></div>
        </div>
        <label class="label label_light" for="checkbox">Корпоративный</label>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <input class="native-checkbox" id="checkbox" type="checkbox" name="checkbox">
          <div class="toggle__back"></div>
          <div class="toggle__toggle"></div>
        </div>
        <label class="label label_light" for="checkbox">Видео монтаж и 3D</label>
      </div>

    </div>
    <footer class="form__footer">
      <input class="button button_large button_dark md-trigger" data-modal="order-dialog" type="submit" value="Отправить">
    </footer>
  </form>
</div>

</body>
</html>