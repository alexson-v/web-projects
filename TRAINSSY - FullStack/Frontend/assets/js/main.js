// Главная страница -> (320px - XXX) -> Офферная конструкция

const swiperOfferImg = new Swiper('.slider-offer-img', {
  pagination: {
  el: '.swiper-pagination',
  type: 'bullets',
  },
  slidesPerView: 1,
  loop: true,
  speed: 2000,
  parallax: true,
  autoplay: {
  delay: 3000
  }
});

const swiperOfferText = new Swiper('.slider-offer-text', {
  loop: true,
  speed: 2000,
  simulateTouch: true,
  touchAngle: 45,
  draggable: true
});

try {
  swiperOfferImg.controller.control = swiperOfferText;
  swiperOfferText.controller.control = swiperOfferImg;
} catch(e) {

}

// Главная страница -> (320px - XXX) -> Самые свежие новинки

const swiperNewProducts = new Swiper('.slider-new-products', {
  simulateTouch: true,
  touchAngle: 45,
  draggable: true,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    dragSize: 50,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    clickable: true,
  },
  slidesPerView: 3,
  breakpoints: {
    992: {
      slidesPerView: 3,
    },
    425: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  }
});