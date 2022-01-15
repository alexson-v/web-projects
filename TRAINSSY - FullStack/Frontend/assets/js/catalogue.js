jQuery(document).ready(function($) {
    // Появление мобильного нижнего меню после прокрутки вниз
    let navbarUi = $('.navbar_ui_mobile'),
    scrollPrev = 0;
    $(window).scroll(function() {
    let scrolled = $(window).scrollTop();
    if ( scrolled < 400 ) {
        navbarUi.addClass('out');
    } else {
        navbarUi.removeClass('out');
    }
        scrollPrev = scrolled;
    });
});

document.addEventListener('DOMContentLoaded', function() {

    !function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);

    // Фильтры размеров, цен и цветов (popup-окна)
    const openFilters = document.querySelectorAll('.open_filter'),
          overlay = document.querySelector('.overlay');

    openFilters.forEach(function(item){
        item.addEventListener('click', function(e) {
            const filterId = this.getAttribute('data-filter'),
                    filterElem = document.querySelector('.category_filter_js[data-filter="' + filterId + '"]'),
                    filterArrow = document.querySelector('.category_dropdown-arrow[data-filter="' + filterId + '"]');
            filterElem.classList.add('active');
            filterArrow.classList.add('active');
            overlay.classList.add('active');

            overlay.addEventListener('click', function() {
                filterElem.classList.remove('active');
                filterArrow.classList.remove('active');
                this.classList.remove('active');
            });
        }, {passive: true});
    });

    // Скрипт выпадающего окна со всеми фильтрами на JavaScript
    const openBigMobileFilter = document.querySelectorAll('.category__filters__small'),
          closeButtons = document.querySelectorAll('.filters-popup__close-button'),
          body = document.querySelector('body');

    openBigMobileFilter.forEach(function(item){
        item.addEventListener('click', function(e) {
            const mobileFilterId = this.getAttribute('data-mobile_filters'),
                  mobileFilterElem = document.querySelector('.filters_popup_body[data-mobile_filters="' + mobileFilterId + '"]');
            mobileFilterElem.classList.add('active');
            overlay.classList.add('active');
            body.classList.add('lock');
        }, {passive: true});
    });
    closeButtons.forEach(function(item){
        item.addEventListener('click', function(e) {
            let parentModal = this.closest('.filters_popup_body');
            parentModal.classList.remove('active');
            overlay.classList.remove('active');
            body.classList.remove('lock');
        }, {passive: true});

        overlay.addEventListener('click', function(e) {
            document.querySelector('.filters_popup_body').classList.remove('active');
            this.classList.remove('active');
            body.classList.remove('lock');
        }, {passive: true});
    });

    // Выпадание фильтров в мобильной версии
    const openFilterDropdown = document.querySelectorAll('.filters-mobile__call');
    openFilterDropdown.forEach(function(item){
        item.addEventListener('click', function(e) {
            const filterDropdownId = this.getAttribute('data-filter-dropdown_mobile'),
                  filterDropdownElem = document.querySelector('.filter-mobile-dropdown[data-filter-dropdown_mobile="' + filterDropdownId + '"]'),
                  filterIconElem = document.querySelector('.filter-mobile-icon[data-filter-dropdown_mobile="' + filterDropdownId + '"]');
            filterDropdownElem.classList.toggle('active');
            filterIconElem.classList.toggle('active');
        }, {passive: true} );
    });
}, {passive: true} );


// NoUiSlider - настройка ползунка фильтра "Цена" с диапазоном значений
const filterValueSlider = document.getElementById('filter-dropdown__slider'),
      filterValueSliderMobile = document.getElementById('filter-dropdown__slider__mobile');

if (filterValueSlider) {
    noUiSlider.create(filterValueSlider, {
        start: [0, 4500],
        connect: true,
        tooltips: [true, true],
        range: {
            'min': 2500,
            'max': 4500
        }
    });
}
if (filterValueSliderMobile) {
    noUiSlider.create(filterValueSliderMobile, {
        start: [0, 4500],
        connect: true,
        tooltips: [true, true],
        range: {
            'min': 2500,
            'max': 4500
        }
    });
}