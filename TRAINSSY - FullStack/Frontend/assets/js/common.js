// Спрятать страницу до полной загрузки 
jQuery(window).on('load', function() {
    jQuery('.lds-roller').fadeOut().delay(400).fadeOut('slow');
});

jQuery(document).ready(function($) {

    // Решение проблемы с непассивным прослушиванием событий на jQuery
    jQuery.event.special.touchstart = {
        setup: function( _, ns, handle ){
          if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchstart", handle, { passive: false });
          } else {
            this.addEventListener("touchstart", handle, { passive: true });
          }
        }
    };

    // Выпадающее окно полного меню (десктопная версия)
    $('#openFullMenuBtn').on('mouseover', function () {
        $("#openFullMenu").slideDown(400);
    });
    $('.horizontal_line').on('mouseover', function(e) {
        if (!$('#openFullMenuBtn').is(e.target) && !$('#openFullMenu').is(e.target)) {
        $("#openFullMenu").slideUp(400);
        }
    });

    // Плавная прокрутка вверх по нажатию на кнопки-якорь
    var btn = $('.btn_up');
    btn.on('click', function(e) {
        $('html, body').animate({scrollTop:0}, '300');
    });

});


document.addEventListener('DOMContentLoaded', () => {

    // Глобальный скрипт мягкой прокрутки страницы
    SmoothScroll({
        animationTime    : 600,
        stepSize         : 100,
        accelerationDelta : 100,  
        accelerationMax   : 2,   
        keyboardSupport   : true,  
        arrowScroll       : 50,
        pulseAlgorithm   : true,
        pulseScale       : 4,
        pulseNormalize   : 1,
        touchpadSupport   : true,
    });


    // Уведомление об использовании cookies
    var cookiesNotice = document.querySelector('.cookies-notice');

    if (typeof(cookiesNotice) != 'undefined' && cookiesNotice != null) {
        function checkCookies() {
            var cookiesDate = localStorage.getItem('cookiesDate');
            var cookiesCloseButton = cookiesNotice.querySelector('.cookies-notice .close-button');
            if( !cookiesDate || (+cookiesDate + 31536000000) < Date.now() ){
                cookiesNotice.classList.add('show');
            }
        
            cookiesCloseButton.addEventListener('click', function(){
                localStorage.setItem( 'cookiesDate', Date.now() );
                cookiesNotice.classList.remove('show');
            });
        }
        checkCookies();
    }


    // Открытие главного меню в мобильной версии
    var openMobileMainMenu = document.querySelectorAll('.header-main__hamburger-menu'),
          closeMobileMainMenu = document.querySelector('.navbar_mobile_close'),
          openMobileCategoryMenu = document.querySelectorAll('.navbar_mobile_open_category'),
          closeMobileCategoryMenu = document.querySelectorAll('.navbar_mobile_close-category'),
          overlay = document.querySelector('.overlay'),
          content = document.querySelector('.content'),
          body = document.querySelector('body');

    openMobileMainMenu.forEach(function(item){
        item.addEventListener('click', function(e) {

            var mobileMainMenuId = this.getAttribute('data-mobile_menu'),
                mobileMainMenuElem = document.querySelector('.menu_mobile[data-mobile_menu="' + mobileMainMenuId + '"]');

            mobileMainMenuElem.classList.add('active');
            overlay.classList.add('active');
            body.classList.add('locked-for-sidemenu');
        }, {passive: true} );
    });

    closeMobileMainMenu.addEventListener('click', function(e) {
        var parentModal = this.closest('.menu_mobile');

        parentModal.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('locked-for-sidemenu');
    }, {passive: true} );

    openMobileCategoryMenu.forEach(function(item){
        item.addEventListener('click', function(e) {
            
            var mobileCategoryMenuId = this.getAttribute('data-mobile_menu-category'),
                mobileCategoryMenuElem = document.querySelector('.menu_mobile_category[data-mobile_menu-category="' + mobileCategoryMenuId + '"]');

            mobileCategoryMenuElem.classList.add('active');
        }, {passive: true} );
    });

    closeMobileCategoryMenu.forEach(function(item){
        item.addEventListener('click', function(e) {
            var mobileCategoryMenuId = this.getAttribute('data-mobile_menu-category'),
                    mobileCategoryMenuElem = document.querySelector('.menu_mobile_category[data-mobile_menu-category="' + mobileCategoryMenuId + '"]');
            mobileCategoryMenuElem.classList.remove('active');
        }, {passive: true} );
    });

    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;
        if (key == 27) {
            document.querySelector('.menu_mobile').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
            document.querySelector('.content').classList.remove('active-left');
            document.querySelector('.menu_mobile_category').classList.remove('active');
            body.classList.remove('locked-for-sidemenu');
        }
    }, false, {passive: true} );

    overlay.addEventListener('click', function() {
        document.querySelector('.menu_mobile').classList.remove('active');
        document.querySelector('.menu_mobile_category').classList.remove('active');
        this.classList.remove('active');
        body.classList.remove('locked-for-sidemenu');
    }, {passive: true} );


    // Скрипт для попапа "Корзина"
    const popupCartLinks = document.querySelectorAll('.popup-cart-link');
    const bodyOfCart = document.querySelector('body');
    const lockPaddingCart = document.querySelectorAll('.lock-padding');
    let unlockCart = true;
    const timeoutCart = 800;
    
    if (popupCartLinks.length > 0) {
        for (let index = 0; index < popupCartLinks.length; index++) {
            const popupLinkCart = popupCartLinks[index];
            popupLinkCart.addEventListener('click', function (e) {
                const popupNameCart = popupLinkCart.getAttribute('href').replace('#', '');
                const currentPopupCart = document.getElementById(popupNameCart);
                popupCartOpen(currentPopupCart);
            });
        }
    }
    const popupCloseIconCart = document.querySelectorAll('.close-popup-cart');
    if (popupCloseIconCart.length > 0) {
        for (let index = 0; index < popupCloseIconCart.length; index++) {
            const el = popupCloseIconCart[index];
            el.addEventListener('click', function (e) {
                popupCloseCart(el.closest('.popup_cart'));
            });
        }
    }
    function popupCartOpen(currentPopupCart) {
        if (currentPopupCart && unlockCart) {
            const popupActiveCart = document.querySelector('.popup_cart.open');
            if (popupActiveCart) {
                popupCloseCart(popupActiveCart, false);
            } else {
                bodyLockCart();
            }
            currentPopupCart.classList.add('open');

            currentPopupCart.addEventListener('click', function (e) {
                if (!e.target.closest('.cart_popup__content')) {
                    popupCloseCart(e.target.closest('.popup_cart'));
                }
            });
        }
    }
    function popupCloseCart(popupActiveCart, doUnlockCart = true) {
        if (unlockCart) {

            popupActiveCart.classList.remove('open');
            if (doUnlockCart) {
                bodyUnlockCart();
            }
        }
    }
    function bodyLockCart() {
        if (lockPaddingCart.length > 0) {
            for (let index = 0; index < lockPaddingCart.length; index++) {
                const el = lockPaddingCart[index];
                el.getElementsByClassName.paddingRightCart = lockPaddingCartValue;
            }
        }
        bodyOfCart.classList.add('lock');
    
        unlockCart = false;
        setTimeout(function () {
            unlockCart = true;
        }, timeoutCart);
    }
    function bodyUnlockCart() {
        setTimeout(function () {
            if (lockPaddingCart.length > 0) {
                for (let index = 0; index < lockPaddingCart.length; index++) {
                    const el = lockPaddingCart[index];
                    el.style.paddingRightCart = '0px';
                }
            }
            bodyOfCart.style.paddingRightCart = '0px';
            bodyOfCart.classList.remove('lock');
        }, timeoutCart);
    
        unlockCart = false;
        setTimeout(function () {
            unlockCart = true;
        }, timeoutCart);
    }

    (function () {
        if (!Element.prototype.closest) {
            Element.prototype.closest = function (css) {
                var node = this;
                while (node) {
                    if (node.matches(css)) return node;
                    else node = node.parentElement;
                }
                return null;
            };
        }
    })();
    (function () {
        if (!Element.prototype.matches) {
            Element.prototype.matches = Element.prototype.matchesSelector ||
                Element.prototype.webkitMatchesSelector ||
                Element.prototype.mozMatchesSelector ||
                Element.prototype.msMatchesSelector;
        }
    })();


    // Скрипт для попапа "Искать товар"
    const popupSearchLinks = document.querySelectorAll('.popup-search-link');
    const bodyOfSearch = document.querySelector('body');
    const lockPaddingSearch = document.querySelectorAll('.lock-padding');

    let unlockSearch = true;

    const timeoutSearch = 800;

    if (popupSearchLinks.length > 0) {
        for (let index = 0; index < popupSearchLinks.length; index++) {
            const popupLinkSearch = popupSearchLinks[index];
            popupLinkSearch.addEventListener('click', function (e) {
                const popupNameSearch = popupLinkSearch.getAttribute('href').replace('#', '');
                const currentPopupSearch = document.getElementById(popupNameSearch);
                popupSearchOpen(currentPopupSearch);
            });
        }
    }
    const popupCloseIconSearch = document.querySelectorAll('.close-popup-search');
    if (popupCloseIconSearch.length > 0) {
        for (let index = 0; index < popupCloseIconSearch.length; index++) {
            const el = popupCloseIconSearch[index];
            el.addEventListener('click', function (e) {
                popupCloseSearch(el.closest('.popup_search'));
            });
        }
    }
    function popupSearchOpen(currentPopupSearch) {
        if (currentPopupSearch && unlockSearch) {
            const popupActiveSearch = document.querySelector('.popup_search.open');
            if (popupActiveSearch) {
                popupCloseSearch(popupActiveSearch, false);
            } else {
                bodyLockSearch();
            }
            currentPopupSearch.classList.add('open');
            currentPopupSearch.addEventListener('click', function (e) {
                if (!e.target.closest('.search-popup__body')) {
                    popupCloseSearch(e.target.closest('.popup_search'));
                }
            });
        }
    }
    function popupCloseSearch(popupActiveSearch, doUnlockSearch = true) {
        if (unlockSearch) {
            popupActiveSearch.classList.remove('open');
            if (doUnlockSearch) {
                bodyUnlockSearch();
            }
        }
    }
    function bodyLockSearch() {
        bodyOfSearch.classList.add('lock');
        unlockSearch = false;
        setTimeout(function () {
            unlockSearch = true;
        }, timeoutSearch);
    }
    function bodyUnlockSearch() {
        setTimeout(function () {
            bodyOfSearch.classList.remove('lock');
        }, timeoutSearch);
        unlockSearch = false;
        setTimeout(function () {
            unlockSearch = true;
        }, timeoutSearch);
    }

});