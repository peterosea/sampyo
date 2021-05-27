class Slideshow {
  constructor(el) {
    this.DOM = { el: el };

    this.config = {
      slideshow: {
        delay: 3000,
        pagination: {
          duration: 3,
          el: ".swiper-pagination",
          clickable: true,
        },
      },
    };

    this.init();
  }

  init() {
    var self = this;

    this.slideshow = new Swiper(this.DOM.el, {
      loop: true,
      effect: "fade",
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: "wrapper",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
      on: {
        init: () => {
          self.animate("next");
        },
      },
    });

    this.initEvents();
  }
  animate(diraction = "next") {
    // Get the active slide
    this.DOM.activeSlide = this.DOM.el.querySelector(".swiper-slide-active");
    this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector("img");
    this.DOM.activeSlideTitle1 = this.DOM.activeSlide.querySelector(
      ".hero-content-title-1"
    );
    this.DOM.activeSlideTitle2 = this.DOM.activeSlide.querySelector(
      ".hero-content-title-2"
    );

    // reset animation
    if (this.DOM.tl) this.DOM.tl.kill();
    this.DOM.el.querySelectorAll(".swiper-slide").forEach((element) => {
      element.querySelector(".hero-content-title-1").removeAttribute("style");
      element.querySelector(".hero-content-title-2").removeAttribute("style");
    });

    // .title1 애니메이션
    this.DOM.tl = gsap.timeline();
    this.DOM.tl.to(this.DOM.activeSlideTitle1, { x: 10, y: 10, duration: 0.5 });
    this.DOM.tl.to(this.DOM.activeSlideTitle1, {
      opacity: 1,
      x: 0,
      y: 0,
      duration: 1,
    });
    this.DOM.tl.to(this.DOM.activeSlideTitle2, { x: 10, y: 10, duration: 0.3 });
    this.DOM.tl.to(this.DOM.activeSlideTitle2, {
      opacity: 1,
      x: 0,
      y: 0,
      duration: 1,
    });
  }
  initEvents() {
    this.slideshow.on("slideNextTransitionStart", () => this.animate("next"));
    this.slideshow.on("slidePrevTransitionStart", () => this.animate("prev"));
  }
}

const slideshow = new Slideshow(document.querySelector(".hero-slide"));
