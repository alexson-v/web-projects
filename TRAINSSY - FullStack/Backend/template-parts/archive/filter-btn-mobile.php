<?php
    /**
     * Часть шаблона: Кнопка вызова фильтра товаров (мобильная версия).
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<a href="#" class="category__filters__small" data-mobile_filters="1">
    <div class="category_filters-title__small">Фильтровать</div>
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/filter-icon.svg" alt="X">
</a>