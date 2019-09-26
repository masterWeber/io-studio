<div class="md" id="order-dialog">
    <button class="bubble-button bubble-button_horizontal md__close-btn">
        <span class="bubble-button__element bubble-button__element_first"></span>
        <span class="bubble-button__element bubble-button__element_second"></span>
        <span class="bubble-button__element bubble-button__element_third"></span>
        <span class="bubble-button__text"><?= $close_button ?></span>
    </button>
    <form action="<?= $action_order ?>" class="form">

        <header class="form__header">
            <p class="form__title"><?= $here_us_form_title ?></p>
        </header>

        <div class="form__group">
            <div class="input-field">
                <input class="input" id="order-dialog-name" name="name" type="text">
                <label class="label label_light label_placeholder" for="order-dialog-name"><?= $label_name?></label>
            </div>
            <div class="input-field">
                <input class="input" id="order-dialog-email" name="email" type="email">
                <label class="label label_light label_placeholder" for="order-dialog-email"><?= $label_email?></label>
            </div>
        </div>

        <div class="form__toggle-group">

            <div class="toggle-container">
                <div class="toggle">
                    <input class="native-checkbox" id="checkbox-landing" type="checkbox" name="checkbox">
                    <div class="toggle__back"></div>
                    <div class="toggle__toggle"></div>
                </div>
                <label class="label label_light" for="checkbox-landing">Landing page</label>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <input class="native-checkbox" id="checkbox-market" type="checkbox" name="checkbox">
                    <div class="toggle__back"></div>
                    <div class="toggle__toggle"></div>
                </div>
                <label class="label label_light" for="checkbox-market">Интернет магазин</label>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <input class="native-checkbox" id="checkbox-company" type="checkbox" name="checkbox">
                    <div class="toggle__back"></div>
                    <div class="toggle__toggle"></div>
                </div>
                <label class="label label_light" for="checkbox-company">Корпоративный</label>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <input class="native-checkbox" id="checkbox-video" type="checkbox" name="checkbox">
                    <div class="toggle__back"></div>
                    <div class="toggle__toggle"></div>
                </div>
                <label class="label label_light" for="checkbox-video">Видео монтаж и 3D</label>
            </div>

        </div>
        <footer class="form__footer">
            <input class="button button_large button_dark md-trigger" data-modal="order-dialog" type="submit"
                   value="<?= $send_button ?>">
        </footer>
    </form>
</div>
