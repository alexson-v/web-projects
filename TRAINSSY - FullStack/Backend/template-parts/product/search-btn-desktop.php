<?php
    /**
     * Часть шаблона: Кнопка вызова поиска товаров на Странице товара (десктопная версия).
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<a href="#popup_search" class="search-popup_link__product-page popup-search-link">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/push-to-search-btn.svg" alt="Искать товар">
</a>