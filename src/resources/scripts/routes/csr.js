import Swiper from 'swiper';

export default {
  init() {
    const clone = document.querySelector('#csrOriginal').cloneNode(true);
    const target = document.querySelector('#csrSwiper');

    target.insertBefore(clone, target.firstChild);
    target.querySelector('#csrOriginal').removeAttribute('class');
    target.querySelector('#csrOriginal').classList.add('swiper-wrapper');
    target.querySelectorAll('#cardWrap').forEach((e) => {
      e.classList.add('swiper-slide');
    });

    new Swiper('#csrSwiper', {
      pagination: {
        el: target.querySelector('.swiper-pagination'),
        clickable: true,
      },
    });
  },
  finalize() {},
};
