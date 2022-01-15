<?php
    /**
     * Часть шаблона: Кастомное поле ввода купона.
     * Подключено к файлу: wc-functions-checkout.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="promo-code active" id="promoCodePurchase">
    <div class="heading">
        <img class="heading-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/discount-icon.svg" alt="icon">
        <h3 class="heading-title">Получить скидку</h3>
    </div>
    <div class="form__promocode">
        <input type="text" name="coupon_code" class="input-text input-promocode" placeholder="Ввести промокод" id="coupon_code" value="">
        <button type="button" class="button btn" name="apply_coupon" value="<?php __("Apply coupon") ?>">Активировать</button>
        <div class="clear"></div>
    </div>
</div>
<hr class="green-line active" id="cartSmallLine">