import Swiper from 'swiper';

export default {
  init() {
    const clone = document.querySelector('#phcpileOriginal').cloneNode(true);
    const target = document.querySelector('#phcpileSwiper');

    target.insertBefore(clone, target.firstChild);
    target.querySelector('#phcpileOriginal').removeAttribute('class');
    target.querySelector('#phcpileOriginal').classList.add('swiper-wrapper');
    target.querySelectorAll('#cardWrap').forEach((e) => {
      e.classList.add('swiper-slide');
    });

    new Swiper('#phcpileSwiper', {
      pagination: {
        el: target.querySelector('.swiper-pagination'),
        clickable: true,
      },
    });
  },
  finalize() {},
};
