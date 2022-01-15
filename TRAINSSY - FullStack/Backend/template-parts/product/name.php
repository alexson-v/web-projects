<?php
    /**
     * Часть шаблона: Название товара (Полное название + его Артикул от производителя)
     * Подключено к wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $product = wc_get_product();
?>

<h4 class="ui-elements__product-name">
    <?php echo the_title() . get_post_meta( $product->get_id(), 'product_producer_sku_text_field', true ) ? ' ' . '(' .get_post_meta( $product->get_id(), 'product_producer_sku_text_field', true ) . ')' : ' '; ?>
</h4>