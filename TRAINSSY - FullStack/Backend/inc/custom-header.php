<?php
	/**
	 * Шапка темы (файл с хуками).
	 * Подключено к header.php
	 *
	 * @package trainssy
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	// Подключение меню для мобильных устройств
	add_action( 'tr_header_parts', 'trainssy_navi_mobile', 5 );
	function trainssy_navi_mobile() {
		get_template_part( 'template-parts/header/navi-mobile' );
	}

	// Подключение оверлея
	add_action( 'tr_header_parts', 'trainssy_overlay', 10 );
	function trainssy_overlay() {
		?>
		<div class="overlay"></div>
		<?php
	}

	// Подключение начала шапки
	add_action( 'tr_header_parts', 'trainssy_header_start', 20 );
	function trainssy_header_start() {
		?>
		<header class="header">
		<?php
	}

	// Подключение верхней части шапки
	add_action( 'tr_header_parts', 'trainssy_header_top', 25 );
	function trainssy_header_top() {
		get_template_part( 'template-parts/header/header-top' );
	}

	// Подключение начала нижней части шапки
	add_action( 'tr_header_parts', 'trainssy_header_bottom_start', 30 );
	function trainssy_header_bottom_start() {
		?>
		<div class="header-main">
            <div class="container">
                <div class="row">
		<?php
	}

	// Подключение логотипа в шапке (чёрного)
	add_action( 'tr_header_parts', 'trainssy_header_logo_black', 35 );
	function trainssy_header_logo_black() {
		get_template_part( 'template-parts/header/logo-black' );
	}

	// Подключение превью навигации в шапке
	add_action( 'tr_header_parts', 'trainssy_header_navi_preview', 40 );
	function trainssy_header_navi_preview() {
		get_template_part( 'template-parts/header/navi-preview' );
	}

	// Подключение номера телефона (разрешение < 768)
	add_action( 'tr_header_parts', 'trainssy_header_phone_tablet', 45 );
	function trainssy_header_phone_tablet() {
		get_template_part( 'template-parts/header/phone-tablet' );
	}

	// Подключение бокового меню с кнопкой вызова попап-корзины и кнопкой-ссылкой на Личный аккаунт
	add_action( 'tr_header_parts', 'trainssy_cart_and_account_btn', 50 );
	function trainssy_cart_and_account_btn() {
		get_template_part( 'template-parts/header/cart-and-account-btn' );
	}

	// Подключение кнопки-hamburger (кнопки вызова мобильного меню)
	add_action( 'tr_header_parts', 'trainssy_header_hamburger_btn', 55 );
	function trainssy_header_hamburger_btn() {
		get_template_part( 'template-parts/header/hamburger-btn' );
	}

	// Подключение конца нижней части шапки
	add_action( 'tr_header_parts', 'trainssy_header_bottom_end', 60 );
	function trainssy_header_bottom_end() {
		?>
					</div>
                </div>
            </div>
        </header>
		<?php
	}

	// Подключение начала раскрывающегося меню
	add_action( 'tr_header_parts', 'trainssy_dropdown_menu_start', 65 );
	function trainssy_dropdown_menu_start() {
		?>
		<section class="full-menu">
            <div class="header_full_menu_wrapper" id="openFullMenu">
                <div class="container">
                    <div class="row">
		<?php
	}

	// Подключение сайдбара в раскрывающемся меню
	add_action( 'tr_header_parts', 'trainssy_dropdown_menu_sidebar', 70 );
	function trainssy_dropdown_menu_sidebar() {
		get_template_part( 'template-parts/header/dropdown-menu-sidebar' );
	}

	// Подключение превью "Популярных категорий" в раскрывающемся меню
	add_action( 'tr_header_parts', 'trainssy_dropdown_menu_cat', 75 );
	function trainssy_dropdown_menu_cat() {
		get_template_part( 'template-parts/header/dropdown-menu-cat' );
	}

	// Подключение конца раскрывающегося меню
	add_action( 'tr_header_parts', 'trainssy_dropdown_menu_end', 80 );
	function trainssy_dropdown_menu_end() {
		?>
					</div>
                </div>
            	<div class="horizontal_line"></div>
            </div>
        </section>
		<?php
	}
?>