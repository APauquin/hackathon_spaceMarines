const swiper = new Swiper('.swiperMain', {
    parallax: true,

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

      },
  });
