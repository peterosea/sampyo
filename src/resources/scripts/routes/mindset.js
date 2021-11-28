import Swiper from 'swiper';

export default {
  init() {
    const clone = document.querySelector('#mindsetOriginal').cloneNode(true);
    const target = document.querySelector('#mindsetSwiper');

    target.insertBefore(clone, target.firstChild);
    target.querySelector('#mindsetOriginal').removeAttribute('class');
    target.querySelector('#mindsetOriginal').classList.add('swiper-wrapper');
    target.querySelectorAll('#cardWrap').forEach((e) => {
      e.classList.add('swiper-slide');
    });

    new Swiper('#mindsetSwiper', {
      pagination: {
        el: target.querySelector('.swiper-pagination'),
        clickable: true,
      },
    });
  },
  finalize() {},
};
