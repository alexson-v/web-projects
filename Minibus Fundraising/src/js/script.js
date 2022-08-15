const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu'),
      body = document.querySelector('body'),
      overlay = document.querySelector('.menu__overlay'),
      closeElem = document.querySelector('.menu__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    body.classList.add('blocked');
});
closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
    body.classList.remove('blocked');
});
overlay.addEventListener('click', () => {
    menu.classList.remove('active');
    body.classList.remove('blocked');
});