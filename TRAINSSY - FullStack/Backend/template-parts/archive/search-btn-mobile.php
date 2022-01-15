<?php
    /**
     * Часть шаблона: Кнопка вызова поиска товаров (мобильная версия).
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<a href="#popup_search" class="popup-search-link popup-search-link__small">
    <div class="popup-search-link__content-wrapper d-flex">
        <p class="search-button__text">Искать товар</p>
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/push-to-search-btn_small.svg" class="search-button__smallimg" alt="<">
    </div>
    <hr class="search-button__line">
</a>