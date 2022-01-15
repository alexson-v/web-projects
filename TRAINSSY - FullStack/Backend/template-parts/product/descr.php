<?php
    /**
     * Часть шаблона: Описание товара.
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    global $product;
?>
<div class="main-block__product-additional__descr">
    <h5 class="product-additional__descr-title">Описание товара</h5>
    <p class="product-additional__descr-text">
        <?php echo $product->post->post_content; ?>
    </p>
</div>
<div class="main-block__product-additional__features">
    <h5 class="product-additional__features-title">Технические характеристики</h5>
    <?php echo the_excerpt(); ?>
</div>

