jQuery(document).ready(function($) {

    // Функция передает значение фэйкового поля ввода промокода в скрытую форму промокода за пределами формы чекаута
    jQuery( function($){
        
        $('.coupon-form').css("display", "none");
        
        $('.checkout-coupon-toggle .show-coupon').on( 'click', function(e){
            $('.coupon-form').toggle(200);
            e.preventDefault();
        });
        
        $('.form__promocode input[name="coupon_code"]').on( 'input change', function(){
            $('form.checkout_coupon input[name="coupon_code"]').val($(this).val());
        });
        
        $('.form__promocode button[name="apply_coupon"]').on( 'click', function(){
            $('form.checkout_coupon').submit();
        });
    });

    /**
     * Инпут billing-номера телефона дублирует значение поля ввода в скрытый инпут shipping-номера 
     * (для корректного отображения номера телефона в экспресс-накладной Новой Почты)
     */
    jQuery( function($){
        $('.form__task-1 input[name="billing_phone"]').on( 'input change', function(){
            $('input[name="wcus_shipping_phone"]').val($(this).val());
        });
        // Аналогично с ФИО
        $('.form__task-1 input[name="billing_first_name"]').on( 'input change', function(){
            $('.shipping_address input[name="shipping_first_name"]').val($(this).val());
        });
        $('.form__task-1 input[name="billing_last_name"]').on( 'input change', function(){
            $('.shipping_address input[name="shipping_last_name"]').val($(this).val());
        });
        $('.form__task-1 input[name="billing_middle_name"]').on( 'input change', function(){
            $('.shipping_address input[name="wcus_shipping_middlename"]').val($(this).val());
        });
    });
    
    
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
});