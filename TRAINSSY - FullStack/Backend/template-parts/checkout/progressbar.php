<?php
    /**
     * Часть шаблона: Прогрессбар оформления заказа.
     * Подключено к файлу: wc-functions-checkout.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="gradual-form__progressbar">
    <div class="progress-level active" data-checkout="1">1</div>
    <hr class="progressbar-line active"data-checkout="1">
    <div class="progress-level" data-checkout="2">2</div>
    <hr class="progressbar-line" data-checkout="2">
    <div class="progress-level" data-checkout="3">3</div>
    <div class="line-wrapper">
        <hr class="progressbar-line" data-checkout="3">
        <i class="progressbar-arrow" data-checkout="3"></i>
    </div>
    <div class="progress-level finish" id="progressLevel4"></div>
</div>