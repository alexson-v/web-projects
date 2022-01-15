<?php
    /**
     * Часть шаблона: Кнопка вызова фильтров товаров (десктопная версия).
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="category_filters-wrapper">
    <div class="category_filters-title ml-auto">Фильтровать:</div>
    <div class="category_filters d-flex">
        <div class="category_filters-size d-flex open_filter" data-filter="1">
            <p>Размер</p>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" class="category_dropdown-arrow" alt="v" data-filter="1">
        </div>
        <div class="category_filters-value d-flex open_filter" data-filter="2">
            <p>Цена</p>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" class="category_dropdown-arrow" alt="v" data-filter="2">
        </div>
        <div class="category_filters-color d-flex open_filter" data-filter="3">
            <p>Цвет</p>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" class="category_dropdown-arrow" alt="v" data-filter="3">
        </div>
    </div>
</div>