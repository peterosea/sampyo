import Swiper from 'swiper';

export default {
  init() {
    new Swiper('#readyMix', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 20,
          pagination: {
            el: '#readyMix .swiper-pagination',
            clickable: true,
          },
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 5,
          spaceBetween: 50,
          centeredSlides: true,
        },
      },
    });
  },
  finalize() {},
};
