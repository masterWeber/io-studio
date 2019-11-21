<div class="about container">
    <div class="active-background">
        <div class="active-background__wrapper">
            <video class="active-background__video" autoplay loop preload="auto" muted>
                <source src="/assets/video/bird/bird_vp8.webm" type="video/webm"/>
                <source src="/assets/video/bird/bird_hevc.mp4" type="video/mp4"/>
                <source src="/assets/video/bird/bird_avc.mp4" type="video/mp4"/>
            </video>

            <svg class="active-background__mask mask-w" viewBox="0 0 750 500"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <use xlink:href="/images/mask_w.svg#mask"></use>
            </svg>
        </div>
    </div>


    <div class="about__header">
        <div class="about__title-container column">
            <h2 class="column__title title title_large title_high">
                <?= $concept_title ?>
            </h2>
        </div>
        <div class="about__subtitle-container column">
            <p class="text text_wide">
                <?= $concept_text ?>
            </p>
        </div>
    </div>

    <div class="about__content">
        <div class="column about__item about__item_reward">
            <span class="column__title text text_medium text_wide"><?= $awards ?></span>
            <span class="text text_medium text_wide">2</span>
        </div>
        <div class="about__column-group">
            <div class="column about__item">
                <span class="column__title text text_medium text_wide"><?= $country ?></span>
                <span class="text"><?= $country_text ?></span>
            </div>
            <div class="column about__item">
                <span class="column__title text text_medium text_wide"><?= $year ?></span>
                <span class="text">2018</span>
            </div>
            <div class="column about__item">
                <span class="column__title text text_medium text_wide"><?= $profile ?></span>
                <span class="text"><?= $profile_text ?></span>
            </div>
            <div class="column about__item">
                <span class="column__title text text_medium text_wide"><?= $business_line ?></span>
                <span class="text"><?= $business_line_text ?></span>
            </div>
        </div>
    </div>

</div>
