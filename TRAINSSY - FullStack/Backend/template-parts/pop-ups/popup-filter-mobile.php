<?php
    /**
     * Часть шаблона: Всплывающее окно фильтров товаров (мобильная версия).
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<?php
    if( is_archive() ) {
        ?>
        <div id="popup_filtersMobile" class="popup_filters__mobile">
            <div class="filters_popup_body" data-mobile_filters="1">
                <img class="filters-popup__close-button" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" alt="X">
                <h4 class="filters-popup__title">Фильтровать</h4>
                <div class="category_filters-size__mobile">
                    <div class="filters-mobile__call" data-filter-dropdown_mobile="1">
                        <h5 class="filters-mobile__call-title">Размер</h5>
                        <img class="filters-mobile__call-icon filter-mobile-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" data-filter-dropdown_mobile="1" alt="Раскрыть вниз">
                    </div>  
                    <div class="filters-size__mobile__dropdown filter-mobile-dropdown" data-filter-dropdown_mobile="1">
                        <div class="dropdown-checkbox__family mobile">
                            <?php echo do_shortcode( '[br_filter_single filter_id=655]' ); ?>
                        </div>
                    </div>
                    <hr class="green-line green-line__mobile-filters">     
                </div>
                <div class="category_filters-value__mobile">
                    <div class="filters-mobile__call" data-filter-dropdown_mobile="2">
                        <h5 class="filters-mobile__call-title">Цена</h5>
                        <img class="filters-mobile__call-icon filter-mobile-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" data-filter-dropdown_mobile="2" alt="Раскрыть вниз">
                    </div>
                    <div class="filters-value__mobile__dropdown filter-mobile-dropdown" data-filter-dropdown_mobile="2">
                        <div class="category_filters-value__dropdown__mobile category_filter_js__mobile">
                            <?php echo do_shortcode( '[br_filter_single filter_id=656]' ); ?>
                        </div>
                    </div>
                    <hr class="green-line green-line__mobile-filters">
                </div>
                <div class="category_filters-color__mobile">
                    <div class="filters-mobile__call" data-filter-dropdown_mobile="3">
                        <h5 class="filters-mobile__call-title">Цвет</h5>
                        <img class="filters-mobile__call-icon filter-mobile-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" data-filter-dropdown_mobile="3" alt="Раскрыть вниз">
                    </div>
                    <div class="filters-color__mobile__dropdown filter-mobile-dropdown" data-filter-dropdown_mobile="3">
                        <div class="dropdown-checkbox__family mobile">
                            <?php echo do_shortcode( '[br_filter_single filter_id=657]' ); ?>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode( '[br_filter_single filter_id=659]' ) . do_shortcode( '[br_filter_single filter_id=661]' ); ?>
            </div>
        </div>
        <?php
    }
?>