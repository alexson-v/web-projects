<?php
    /**
     * Часть шаблона: Триггеры кастомных табов товара.
     * Подключено к wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<nav class="main-block__product-navbar">
    <ul id="productTabs">
        <li class="product-tab__trigger active" data-product-tab="1">Все о товаре</li>
        <li class="product-tab__trigger" data-product-tab="2">Описание</li>
        <li class="product-tab__trigger gallery" data-product-tab="3">Фото</li>
        <li class="product-tab__trigger" data-product-tab="4">Оставить отзыв</li>
    </ul>
</nav>