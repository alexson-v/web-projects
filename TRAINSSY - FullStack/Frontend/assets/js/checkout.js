jQuery(document).ready(function($) {
    $("#shipping_phone").mask("+38 (999) 999-99-99");
});

document.addEventListener('DOMContentLoaded', () => {

    // Табы оформления заказа
    const checkoutBtnNext = document.querySelectorAll('.btn.checkout-btn'),
          checkoutIndicators = document.querySelectorAll('.progress-level'),
          checkoutLine = document.querySelectorAll('.progressbar-line'),
          checkoutLastArrow = document.querySelector('.progressbar-arrow'),
          checkoutTabs = document.querySelectorAll('.gradual-form__task');

    // Цикл табов по клику на индикаторы
    for (let i = 0; i < checkoutIndicators.length; i++) {
        checkoutIndicators[i].addEventListener("click", function(e){
            const activeTabAttr = e.target.getAttribute("data-checkout");
            for (let j = 0; j < checkoutTabs.length; j++) {
                let contentAttr = checkoutTabs[j].getAttribute("data-checkout");
                if (activeTabAttr === contentAttr) {
                    checkoutTabs[j].classList.add("active");
                    checkoutIndicators[j].classList.add("active");
                } else {
                    checkoutTabs[j].classList.remove("active");
                }
            }
        });
    }
    
    // Цикл табов по клику на кнопки "Назад" и "Вперед"
    for (let p = 0; p < checkoutBtnNext.length; p++) { 

        checkoutBtnNext[p].addEventListener("click", function(e){
            const activeTabAttr = e.target.getAttribute("data-checkout");
            for (let j = 0; j < checkoutTabs.length; j++) {
                let contentAttr = checkoutTabs[j].getAttribute("data-checkout");
                if (activeTabAttr === contentAttr) {
                    checkoutTabs[j].classList.add("active");
                    checkoutIndicators[j].classList.add("active");
                    checkoutLine[j].classList.add("active");
                } else {
                    checkoutTabs[j].classList.remove("active");
                }
            }
        });
    }

    shippingBtn = document.querySelector('.btn.shipping');
    if (typeof(shippingBtn) != 'undefined' && shippingBtn != null) {
        shippingBtn.addEventListener("click", function (e) {
            checkoutLastArrow.classList.add("active");
        });
    }


    // Активация кнопки "Подтвердить заказ"
    finishBtn = document.querySelector('.btn.payment');
    if (typeof(finishBtn) != 'undefined' && finishBtn != null) {
        finishBtn.addEventListener("click", function (e) {
            document.querySelector('.btn.finish').classList.add("confirmed");
            jQuery('html, body').animate({scrollTop:800}, 1000);
        });
    }

    let btnProceed = document.querySelector('.btn.finish');
    btnProceed.addEventListener("click", function (e) {
        document.querySelector('section.main-block__purchase').classList.add("d-none");
        document.querySelector('section.main-block__purchase.purchase-success').classList.add("d-block");
        jQuery('html, body').animate({scrollTop:0}, 1000);
    });


});