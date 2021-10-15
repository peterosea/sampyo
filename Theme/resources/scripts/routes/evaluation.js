import Swiper from 'swiper';

export default {
  init() {
    new Swiper('#swiper', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: '#swiper .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
      },
    });
  },
  finalize() {},
};
