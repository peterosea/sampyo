import hero from '../components/home/hero';
import s1 from '../components/home/s1';
import s2 from '../components/home/s2';
import s3 from '../components/home/s3';
import s4 from '../components/home/s4';

export default {
  init() {
    hero(); // hero section
    s1(); // 사업영역 animation
    s2(); // 블로그 뉴스 공지
    s3(); // 삼표의 책임경영
    s4(); // 인재채용
  },
  finalize() {},
};
