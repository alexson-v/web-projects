<?php
	/**
     *  Глобальное.
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	// Подключение поддержки WooCommerce
	add_action( 'after_setup_theme', 'trainssy_add_woocommerce_support' );
	function trainssy_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	// Выборочное отключение стилей WooCommerce
	add_filter( 'woocommerce_enqueue_styles', 'trainssy_dequeue_styles', 1 );
	function trainssy_dequeue_styles( $enqueue_styles ) {
		$enqueue_styles['woocommerce-general'];
		unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
		unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
		return $enqueue_styles;
	}

	// Изменение значка валюты после цен
	add_filter('woocommerce_currency_symbol','change_uah_currency_symbol',10,2);
		function change_uah_currency_symbol( $currency_symbol, $currency ) {
		switch( $currency ) {case'UAH':$currency_symbol='грн'; break;}
		return $currency_symbol;
	}

	// Отключение всех функций от хука глобальных оберток контента WC
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

	// Подключение pop-up Корзины
	add_action( 'wp_footer', 'trainssy_popup_cart', 5 );
	function trainssy_popup_cart() {
		if ( !is_checkout() ) {
			get_template_part( 'template-parts/pop-ups/popup-cart/popup-cart' );
		}
	}

	// Подключение pop-up Поиска товаров
	add_action( 'wp_footer', 'trainssy_popup_search', 7 );
	function trainssy_popup_search() {
		get_template_part( 'template-parts/pop-ups/popup-search' );
	}

	// Подключение pop-up Таблиц размеров
	add_action( 'wp_footer', 'trainssy_popup_size_table', 9 );
	function trainssy_popup_size_table() {
		get_template_part( 'template-parts/pop-ups/popup-table/popup-table' );
	}

	// Подключение pop-up "Восстановить пароль"
	add_action( 'wp_footer', 'trainssy_popup_reset_password', 11 );
	function trainssy_popup_reset_password() {
		if ( is_page(9) && !is_user_logged_in() ) {
			get_template_part( 'template-parts/pop-ups/popup-reset-password' );
		}
	}

	// Отключение WooCommerce-sidebar
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

	/**
	 * Снятие блокировки на запрет дублирования страниц в WC-настройках.
	 * (WooCommerce -> Настройки -> Дополнительно -> Настройки страницы)
	 */
	add_filter( 'woocommerce_settings_pages',
		function ( $setting ) {
			unset( $setting[1]['args'] );
			unset( $setting[2]['args'] );
	
			return $setting;
		}
	);

	// Подключение рубрики "Вам может понравиться" на страницу 404
	add_action( 'trainssy_after_no_page_found', 'woocommerce_output_related_products', 5 );


	