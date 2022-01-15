<?php
    /**
     * Часть шаблона: Пользовательское меню (мобильная версия).
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div id="navbar_ui_mobile" class="navbar_ui_mobile">
    <div class="navbar_ui__icons-wrapper">
        <a class="btn_up">
            <img class="navbar__anchor-icon navbar_ui_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/navbar_anchor-icon.svg" alt="^">
        </a>
        <a href="#" class="category__filters__small navbar" data-mobile_filters="1">
            <img class="navbar__filter-icon navbar_ui_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/filter-icon.svg" alt="Фильтровать">
        </a>
        <a href="#popup_search" class="popup-search-link">
            <img class="navbar__search-icon navbar_ui_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/push-to-search-btn_small.svg" alt="Поиск">
        </a>
        <a href="#popup_cart" class="popup-cart-link navbar_ui_icon d-flex">
            <img class="navbar__basket-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/basket-icon.svg" alt="Корзина">
            <div class="wrapper__basket-counter mobile-navbar">
                <div class="wrapper__basket-counter__ellipse mobile-navbar">
                    <p class="basket-counter__ellipse__count-num navbar_ui">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </p>
                </div>
            </div>
        </a>
        <img class="navbar__hamburger-icon navbar_ui_icon header-main__hamburger-menu" data-mobile_menu="1" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/hamburger-menu.svg" alt="Открыть меню">
    </div>
</div>