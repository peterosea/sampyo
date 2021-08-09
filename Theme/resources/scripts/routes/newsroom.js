import Swiper from 'swiper';
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

SwiperCore.use([Navigation, Pagination]);

export default {
  init() {
    new Swiper('.newsroom__blog-body', {
      slidesPerView: 3,
      spaceBetween: 50,
      navigation: {
        nextEl: '.newsroom__blog .btn-arrow.next',
        prevEl: '.newsroom__blog .btn-arrow.prev',
      },
    });
  },
  finalize() {},
};
