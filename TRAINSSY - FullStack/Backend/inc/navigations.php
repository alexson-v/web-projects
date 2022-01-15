<?php
    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    register_nav_menus (array(
        'primary'  => 'Основное',
		'mega'     => 'Мега-меню',
		'mobile' => 'Мобильное',
		'mobile-shoes-men' => 'Мужская обувь (в мобильном)',
		'mobile-shoes-women' => 'Женская обувь (в мобильном)',
		'mobile-clothes' => 'Одежда (в мобильном)',
		'mobile-accessories' => 'Аксессуары (в мобильном)',
    ));

	function trainssy_primary_menu() {
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'navbar',
			'container'      => 'false',
		));
	}

	function trainssy_mega_menu() {
		wp_nav_menu(array(
			'theme_location' => 'mega',
			'menu_id'        => 'mega-menu',
			'menu_class'     => 'header_full_navbar',
			'container'      => 'false',
		));
	}

	function trainssy_mobile_menu() {
		wp_nav_menu(array(
			'container'      => false,
			'theme_location' => 'mobile',
			'menu_id'        => 'mobile-menu',
			'menu_class'     => 'navbar_mobile',
		));
	}
	// Подвязываю открытие контента во вкладках "Мужская обувь", "Женская обувь", "Одежда" и "Аксессуары"
	add_filter( 'nav_menu_link_attributes', 'add_data_atts_to_nav', 10, 4 );
    function add_data_atts_to_nav( $atts, $item, $args ) {
		$atts['data-mobile_menu-category'] = strtolower(str_replace("#","",$item->url));
		return $atts;
	}
	add_filter('wp_nav_menu','add_menuclass_child_cats');
	function add_menuclass_child_cats($ulclass) {
		return preg_replace('/<a rel="fancybox"/', '<a class="navbar_mobile_open_category"', $ulclass, -1);
	}
	// Добавляю класс, по которому происходит открытие поп-ап корзины в ссылку бургер-меню
	add_filter('wp_nav_menu','add_menuclass_cart');
	function add_menuclass_cart($ulclass) {
		return preg_replace('/<a rel="cartclass"/', '<a class="popup-cart-link"', $ulclass, -1);
	}

	function trainssy_mobile_shoes_men_cat() {
		wp_nav_menu(array(
			'container'      => false,
			'theme_location' => 'mobile-shoes-men',
			'menu_id'        => 'mobile-shoes-men-cat',
			'menu_class'     => 'navbar_mobile',
		));
	}
	function trainssy_mobile_shoes_women_cat() {
		wp_nav_menu(array(
			'container'      => false,
			'theme_location' => 'mobile-shoes-women',
			'menu_id'        => 'mobile-shoes-women-cat',
			'menu_class'     => 'navbar_mobile',
		));
	}
	function trainssy_mobile_clothes_cat() {
		wp_nav_menu(array(
			'container'      => false,
			'theme_location' => 'mobile-clothes',
			'menu_id'        => 'mobile-clothes-cat',
			'menu_class'     => 'navbar_mobile',
		));
	}
	function trainssy_mobile_accessories_cat() {
		wp_nav_menu(array(
			'container'      => false,
			'theme_location' => 'mobile-accessories',
			'menu_id'        => 'mobile-accessories-cat',
			'menu_class'     => 'navbar_mobile',
		));
	}


?>