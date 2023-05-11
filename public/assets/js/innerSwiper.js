var swiperv = new Swiper('.swiper-container-v', {
    slidesPerView: 3,
    grid: {
        rows: 2,
      },
      pagination: {
        el: ".swiper-pagination-v",
        clickable: true,
      },
    direction: 'horizontal',
    nested: true,
    spaceBetween: 30,
    autoplay: {
        delay: 1500,
      },
  });

