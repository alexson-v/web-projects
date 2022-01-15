<?php
    /**
     * Часть шаблона: Внутренний артикул товара + его кнопка "Скопировать"
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $product = wc_get_product();
?>

<div class="ui-elements__product-code">
    <div class="ui-elements__product-code__text">
        Код: <span id="codeText">
            <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?>
        </span>
    </div>
    <button onclick="copyCodeText('#codeText')">
        <img class="ui-elements__product-code__icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/copy-icon.svg" alt="Копировать">
    </button>
    <div class="ui-elements__product-code__message">
        <img class="message_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/simple-whitetick-icon.svg" alt="!">
        Код скопирован
    </div>
</div>