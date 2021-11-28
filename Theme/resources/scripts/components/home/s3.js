import Swiper from 'swiper';

function s3() {
  const cloneS3 = document.querySelector('#originalS3').cloneNode(true);
  const targetS3 = document.querySelector('#swipercontainerS3');

  targetS3.insertBefore(cloneS3, targetS3.firstChild);
  targetS3.querySelector('#originalS3').removeAttribute('class');
  targetS3.querySelector('#originalS3').classList.add('swiper-wrapper');
  targetS3.querySelectorAll('#cardWrap').forEach((e) => {
    e.classList.add('swiper-slide');
    e.classList.remove('w-1/3');
    const sal = e.querySelector('[data-sal]');
    if (sal) {
      sal.removeAttribute('data-sal');
      sal.removeAttribute('data-sal-delay');
      sal.removeAttribute('style');
    }
  });

  new Swiper('#swipercontainerS3', {
    pagination: {
      el: document.querySelector('.swiper-pagination.s3'),
      clickable: true,
    },
  });
}

export default s3;
