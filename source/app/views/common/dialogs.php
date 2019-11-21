<div class="md" id="order-dialog">
    <button class="bubble-button bubble-button_horizontal md__close-btn">
        <span class="bubble-button__element bubble-button__element_first"></span>
        <span class="bubble-button__element bubble-button__element_second"></span>
        <span class="bubble-button__element bubble-button__element_third"></span>
        <span class="bubble-button__text"><?= $close_button ?></span>
    </button>
    <form class="form" method="post" action="<?= $action_order ?>">

        <div class="form__header">
            <p class="form__title"><?= $here_us_form_title ?></p>
        </div>

        <div class="form__group">
            <div class="input-field">
                <input class="input-field__input" id="order-dialog-name" name="name" type="text" minlength="5"
                       placeholder=" " required>
                <label class="label label_light label_placeholder" for="order-dialog-name"><?= $label_name?></label>
            </div>
            <div class="input-field">
                <input class="input-field__input" id="order-dialog-email" name="email" type="email" placeholder=" " required>
                <label class="label label_light label_placeholder" for="order-dialog-email"><?= $label_email?></label>
            </div>
        </div>

        <div class="form__toggle-group">

            <div class="form__toggle-container">
                <div class="toggle">
                    <input class="toggle__native-element" id="toggle-landing" type="checkbox" name="landing">
                    <div class="toggle__background"></div>
                    <div class="toggle__switch"></div>
                </div>
                <label class="label label_light" for="toggle-landing"><?= $text_landing ?></label>
            </div>

            <div class="form__toggle-container">
                <div class="toggle">
                    <input class="toggle__native-element" id="toggle-shop" type="checkbox" name="shop">
                    <div class="toggle__background"></div>
                    <div class="toggle__switch"></div>
                </div>
                <label class="label label_light" for="toggle-shop"><?= $text_shop ?></label>
            </div>

            <div class="form__toggle-container">
                <div class="toggle">
                    <input class="toggle__native-element" id="toggle-company" type="checkbox" name="corporate">
                    <div class="toggle__background"></div>
                    <div class="toggle__switch"></div>
                </div>
                <label class="label label_light" for="toggle-company"><?= $text_corporate ?></label>
            </div>

            <div class="form__toggle-container">
                <div class="toggle">
                    <input class="toggle__native-element" id="toggle-video" type="checkbox" name="video">
                    <div class="toggle__background"></div>
                    <div class="toggle__switch"></div>
                </div>
                <label class="label label_light" for="toggle-video"><?= $text_video ?></label>
            </div>

        </div>
        <div class="form__footer">
            <input class="button button_large button_dark form__button  md-trigger" data-modal="order-dialog" type="submit"
                   value="<?= $send_button ?>">
            <div class="form__checkbox-container">
                <div class="checkbox">
                    <input class="checkbox__native-element" id="checkbox-privacy-policy" type="checkbox" name="privacy-policy"
                           checked="checked" required>
                    <div class="checkbox__background"></div>
                </div>
                <label class="label label_light label_small" for="checkbox-privacy-policy">
                    Я даю своё согласие на обработку персональных данных
                </label>
            </div>
        </div>
    </form>
</div>
