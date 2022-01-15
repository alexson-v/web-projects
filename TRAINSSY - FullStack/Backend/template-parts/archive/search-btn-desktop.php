<?php
    /**
     * Часть шаблона: Кнопка вызова поиска товаров в Каталоге (десктопная версия).
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<a href="#popup_search" class="search-popup_link popup-search-link">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/push-to-search-btn.svg" alt="Искать товар">
</a>