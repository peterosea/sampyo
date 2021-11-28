import Swiper from 'swiper';

export default {
  init() {
    const clone = document.querySelector('#tdOriginal').cloneNode(true);
    const target = document.querySelector('#tdSwiper');

    target.insertBefore(clone, target.firstChild);
    target.querySelector('#tdOriginal').removeAttribute('class');
    target.querySelector('#tdOriginal').classList.add('swiper-wrapper');
    target.querySelectorAll('#cardWrap').forEach((e) => {
      e.classList.add('swiper-slide');
    });

    new Swiper('#tdSwiper', {
      pagination: {
        el: target.querySelector('.swiper-pagination'),
        clickable: true,
      },
    });
  },
  finalize() {},
};
