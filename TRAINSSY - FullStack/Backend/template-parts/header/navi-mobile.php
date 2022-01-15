<?php
    /**
     * Часть шаблона: Меню для мобильных устройств
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>
<div class="menu_mobile_wrapper">
    <nav class="menu_mobile" data-mobile_menu="1">
        <div class="navbar_mobile_close">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" alt="X">
        </div>
        <?php trainssy_mobile_menu(); ?>
    </nav>
    <nav class="menu_mobile_category" data-mobile_menu-category="1">
        <div class="navbar_mobile_close-category" data-mobile_menu-category="1">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/back-icon.svg" alt="<">
            <span class="navbar_mobile_category-title">Мужская обувь</span>
        </div>
        <?php trainssy_mobile_shoes_men_cat(); ?>
    </nav>
    <nav class="menu_mobile_category" data-mobile_menu-category="2">
        <div class="navbar_mobile_close-category" data-mobile_menu-category="2">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/back-icon.svg" alt="<">
            <span class="navbar_mobile_category-title">Женская обувь</span>
        </div>
        <?php trainssy_mobile_shoes_women_cat(); ?>
    </nav>
    <nav class="menu_mobile_category" data-mobile_menu-category="3">
        <div class="navbar_mobile_close-category" data-mobile_menu-category="3">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/back-icon.svg" alt="<">
            <span class="navbar_mobile_category-title">Одежда</span>
        </div>
        <?php trainssy_mobile_clothes_cat(); ?>
    </nav>
    <nav class="menu_mobile_category" data-mobile_menu-category="4">
        <div class="navbar_mobile_close-category" data-mobile_menu-category="4">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/back-icon.svg" alt="<">
            <span class="navbar_mobile_category-title">Аксессуары</span>
        </div>
        <?php trainssy_mobile_accessories_cat(); ?>
    </nav>
</div>