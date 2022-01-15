<?php
    /**
     * Часть шаблона: Сокращенное описание во вкладке "Все о товаре" для простого товара
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    global $product;
?>

<div class="descr-limited">
    <h5>Краткое описание товара:</h5>
    <p>
        <?php
            $content = $product->post->post_content;
            echo mb_strimwidth($content, 0, 252, '...');
        ?>
    </p>
    <a class="descr-link-btn">Читать полное описание</a>
</div>