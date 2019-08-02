<div class="feedback">

    <p class="feedback__title">
        Напишите нам сейчас — мы здесь,
        чтобы помочь вам. Давайте создадим
        уникальный проект для вашего бизнеса
    </p>

    <form class="form form__full" action="<?= $action_feedback ?>">

        <div class="form__group">
            <div class="input-field">
                <input class="input" id="feedback-name" name="name" type="text">
                <label class="label label_light label_placeholder" for="feedback-name">Имя</label>
            </div>
            <div class="input-field">
                <input class="input" id="feedback-email" name="email" type="email">
                <label class="label label_light label_placeholder" for="feedback-email">E-mail</label>
            </div>
        </div>

        <div class="input-field">
            <input class="input" id="feedback-message" name="message" type="text">
            <label class="label label_light label_placeholder" for="feedback-message">Сообщение</label>
        </div>

        <footer class="form__footer">
            <input class="button button_large button_dark md-trigger" data-modal="order-dialog" type="submit"
                   value="Отправить">
        </footer>
    </form>
</div>