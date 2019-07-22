<section class="face">
  <div class="component-logo">
    <video class="component-logo__video" poster="/app/views/assets/video/sea/poster.jpg" autoplay loop preload="auto"
           muted>
      <source src="/app/views/assets/video/sea/sea_vp8.webm" type="video/webm"/>
      <source src="/app/views/assets/video/sea/sea_hevc.mp4" type="video/mp4"/>
      <source src="/app/views/assets/video/sea/sea_avc.mp4" type="video/mp4"/>
    </video>
    <img class="component-logo__mask" src="/images/mask.svg" alt="">
  </div>

  <div class="face__title-container">
    <p class="face__title">
      <?=$face_title?>
    </p>
    <p class="face__subtitle">
      <?=$face_subtitle?>
    </p>
  </div>

</section>
