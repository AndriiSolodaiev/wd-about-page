const swiperTeam = new Swiper(".swiper", {
  // Optional parameters
  //   direction: "vertical",
  //   loop: true,
  speed: 1000,
  spaceBetween: 20,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  breakpoints: {
    // when window width is >= 320px
    1366: {
      slidesPerView: 2,
    },
  },

  //   slidesOffsetAfter: 20,
});
gsap.registerPlugin(ScrollTrigger);
gsap
  .timeline()
  .from(".page-title", { autoAlpha: 0, xPercent: -120, duration: 0.7 })
  .from(
    ".about-hero__title-wrap",
    { opacity: 0, autoAlpha: 0, yPercent: 60, duration: 1 },
    "<"
  )
  .from(".about-hero__building-svg", {
    autoAlpha: 0,
    yPercent: -20,
    duration: 0.7,
    delay: 0.1,
  });

const heroWhaleAnim = () => {
  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".about-hero",
        start: "top+=35% center",
        scrub: 1,
        end: "+=100%",
      },
    })
    .fromTo(
      ".whale-mask__svg image",
      { width: "100%", height: "85%" },
      { width: "140%", height: "120%", duration: 5 }
    );
};

heroWhaleAnim();
gsap
  .timeline({
    scrollTrigger: {
      trigger: ".about-concept__bg",
      start: "top center",
      end: "=100%",
    },
  })
  .from(".about-concept__content-wrap-right", {
    y: 200,
    opacity: 0,
    duration: 0.8,
  })
  .from(".about-concept__content-wrap-right .concept-card__logo", {
    scale: 0,
    opacity: 0,
    delay: 0.1,
  });

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".about-concept__bg-2",
      start: "top center",
      end: "=100%",
    },
  })
  .from(".about-concept__content-wrap-left", {
    y: 200,
    opacity: 0,
    duration: 0.8,
  })
  .from(".about-concept__content-wrap-left .concept-card__logo", {
    scale: 0,
    opacity: 0,
    delay: 0.1,
  });

if (window.locoScroll) {
  window.locoScroll.destroy();
  window.locoScroll = undefined;

  setTimeout(() => {
    document.querySelector(".scroller-container").style.cssText = "";
  }, 0);
}

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".about-team",
      start: "top center",
      end: "=100%",
    },
  })
  .from(".swiper", {
    y: 200,
    opacity: 0,
    duration: 0.8,
  })
  .from(
    ".swiper-button-prev",
    {
      x: 100,
      opacity: 0,
    },
    "<"
  )
  .from(
    ".swiper-button-next",
    {
      x: -100,
      opacity: 0,
    },
    "<"
  );
