<?php
    /**
     * Часть шаблона: Выпадающие окна с фильтрами товаров (десктопная версия)
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="category_filters-size__dropdown category_filter_js" data-filter="1">
    <div class="dropdown-checkbox__family desktop">
        <?php echo do_shortcode( '[br_filter_single filter_id=250]' ) . do_shortcode( '[br_filter_single filter_id=646]' ); ?>
    </div>
</div>
<div class="category_filters-value__dropdown category_filter_js" data-filter="2">
    <?php echo do_shortcode( '[br_filter_single filter_id=650]' ) . do_shortcode( '[br_filter_single filter_id=651]' ); ?>
</div>
<div class="category_filters-color__dropdown category_filter_js" data-filter="3">
    <div class="dropdown-checkbox__family desktop">
        <?php echo do_shortcode( '[br_filter_single filter_id=652]' ) . do_shortcode( '[br_filter_single filter_id=653]' ); ?>
    </div>
</div>