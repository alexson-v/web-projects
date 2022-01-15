// Страница товара -> (992px - 18.000px) -> Слайдер в липком блоке в табах "Описание" и "Оставить отзыв"

const swiperStickyCard = new Swiper('.slider_sticky-card', {
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    simulateTouch: true,
    touchAngle: 45,
    slidesPerView: 1,
    spaceBetween: 17.5,
    draggable: true,
    observer: true,
    observeParents: true,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 2000,
    }
});


// Страница товара -> (992px - 18.000px) -> Большой слайдер фотографий товара в табе "Фото"

const swiperBigGallery = new Swiper('.slider_gallery-big', {
    simulateTouch: true,
    touchAngle: 45,
    centeredSlides: true,
    slidesPerView: 1.850,
    spaceBetween: 40,
    draggable: true,
    observer: true,
    observeParents: true,
    speed: 500,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      clickable: true,
    },
    breakpoints: {
      992: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: 1.850,
        spaceBetween: 40,
      }
    }
});


// Страница товара -> (320px - 992px) -> Слайдер карточек в секции "Вам может понравиться"

const swiperAdditionalsProduct = new Swiper('.slider-product_additionals', {
    simulateTouch: true,
    touchAngle: 45,
    draggable: true,
    slidesPerView: 2,
    observer: true,
    observeParents: true,
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
      dragSize: 200,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      425: {
        slidesPerView: 2,
      },
    }
});


// Страница товара -> (320px - 576px) -> Слайдер изображений товара в версии для смартфонов

const swiperCommonMobile = new Swiper('.slider_product-common__mobile', {
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    simulateTouch: true,
    touchAngle: 45,
    slidesPerView: 1,
    spaceBetween: 17.5,
    draggable: true,
    observer: true,
    observeParents: true,
    loop: true,
    speed: 500
});