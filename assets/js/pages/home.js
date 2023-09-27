const homeBannerSlider = document.querySelector(".home-banner__slider");

const swiper_config = [
  {
    el: homeBannerSlider,
    options: {
      slidesPerView: 1,
      navigation: {
        prevEl: ".home-banner__slider--navigation .nav-prev",
        nextEl: ".home-banner__slider--navigation .nav-next",
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      speed: 1500,
      loop: true,
      on: {
        autoplayTimeLeft(s, time, progress) {
          homeBannerSlider.style.setProperty(
            "--banner-slide-progress",
            1 - progress
          );
        },
      },
    },
  },
];

var homeSliders = [];
swiper_config?.forEach((config, i) => {
  homeSliders[i] = new Swiper(config?.el, config?.options);
});

$("#contact-select").select2();
