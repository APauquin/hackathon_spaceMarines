var swiperH = new Swiper('.swiperMain', {
    parallax: true,
    simulateTouch:false,
    loop: false,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    mousewheel: {
        invert: false,
    },

    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },

    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
        snapOnRelease: true,
      },
  });
