<div class="feedback">

    <p class="feedback__text">
        <?= $feedback_text ?>
    </p>

    <form class="form form__full" action="<?= $action_feedback ?>" method="post">

        <div class="form__group">
            <div class="input-field">
                <input class="input" id="feedback-name" name="name" type="text" minlength="5" placeholder=" " required>
                <label class="label label_light label_placeholder" for="feedback-name"><?= $label_name ?></label>
            </div>
            <div class="input-field">
                <input class="input" id="feedback-email" name="email" type="email" placeholder=" " required>
                <label class="label label_light label_placeholder" for="feedback-email"><?= $label_email ?></label>
            </div>
        </div>

        <div class="input-field">
            <input class="input" id="feedback-message" name="message" type="text" placeholder=" "
                   minlength="5" autocomplete="off"  required>
            <label class="label label_light label_placeholder" for="feedback-message"><?= $label_message ?></label>
        </div>

        <footer class="form__footer">
            <input class="button button_large button_dark" type="submit" value="<?= $send_button ?>">
        </footer>
    </form>
</div>