var swiperPreview = new Swiper('.project-preview-swiper', {
  wrapperClass: 'swiper-wrapper',
  slideClass: 'swiper-slide',
  initialSlide: 2,
  effect: 'coverflow',
  spaceBetween: 20,
  centeredSlides: true,
  slidesPerView: 'auto',
  slideToClickedSlide: true,
  slidesOffsetBefore: 8,
  keyboard: {
    enabled: true,
  },
  coverflowEffect: {
    rotate: -10,
    stretch: -50,
    depth: 250,
    modifier: 1,
    slideShadows: false,
  },
  breakpoints: {
    1000: {
      spaceBetween: 8,
    },
    700: {
      spaceBetween: 0,
      pagination: {
        el: '.project-preview-swiper_pagination',
        dynamicBullets: true,
      },
    },
  },
});

var swiperInfo = new Swiper('.project-info-swiper', {
  wrapperClass: 'project-info-swiper__wrapper',
  slideClass: 'project-info-swiper__slide',
  initialSlide: 2,
  slidesPerView: 'auto',
  spaceBetween: 20,
  slidesOffsetBefore: 8,
  centeredSlides: true,
  breakpoints: {
    1000: {
      spaceBetween: 8,
    },
    700: {
      spaceBetween: 0,
    },
  },
});

swiperPreview.controller.control = swiperInfo;
swiperInfo.controller.control = swiperPreview;