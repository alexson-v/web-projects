<?php
	/**
	 * Подвал темы (файл с хуками).
	 * Подключено к footer.php
	 *
	 * @package trainssy
	 */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Подключение начала подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_start', 5 );
	function trainssy_footer_start() {
		?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
	}

    // Подключение начала первого ряда подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_column_first_start', 10 );
	function trainssy_footer_column_first_start() {
		?>
        <div class="column-first">
        <?php
	}

    // Подключение логотипа в подвале (белого)
	add_action( 'tr_footer_parts', 'trainssy_footer_logo_white', 15 );
	function trainssy_footer_logo_white() {
		get_template_part( 'template-parts/footer/logo-white' );
	}

    // Подключение якоря (разрешение <768)
	add_action( 'tr_footer_parts', 'trainssy_footer_anchor_tablet', 20 );
	function trainssy_footer_anchor_tablet() {
		get_template_part( 'template-parts/footer/anchor-tablet' );
	}

    // Подключение навигации в подвале
	add_action( 'tr_footer_parts', 'trainssy_footer_navi_preview', 25 );
	function trainssy_footer_navi_preview() {
		get_template_part( 'template-parts/footer/navi-preview' );
	}

    // Подключение начала обертки(1) элементов
	add_action( 'tr_footer_parts', 'trainssy_footer_wrapper1_start', 30 );
	function trainssy_footer_wrapper1_start() {
		?>
        <div class="elements-wrapper">
        <?php
	}

    // Подключение якоря (разрешение <1200)
	add_action( 'tr_footer_parts', 'trainssy_footer_anchor_desktop', 35 );
	function trainssy_footer_anchor_desktop() {
		get_template_part( 'template-parts/footer/anchor-desktop' );
	}

    // Подключение номера телефона в подвале
	add_action( 'tr_footer_parts', 'trainssy_footer_phone', 40 );
	function trainssy_footer_phone() {
		get_template_part( 'template-parts/footer/phone' );
	}

    // Подключение конца обертки(1) элементов
	add_action( 'tr_footer_parts', 'trainssy_footer_wrapper1_end', 45 );
	function trainssy_footer_wrapper1_end() {
		?>
        </div>
        <?php
	}

    // Подключение конца первого ряда подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_column_first_end', 50 );
	function trainssy_footer_column_first_end() {
		?>
        </div>
        <?php
	}

    // Подключение начала второго ряда подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_column_second_start', 55 );
	function trainssy_footer_column_second_start() {
		?>
        <div class="column-second">
        <?php
	}

    // Подключение начала обертки(2) элементов
	add_action( 'tr_footer_parts', 'trainssy_footer_wrapper2_start', 60 );
	function trainssy_footer_wrapper2_start() {
		?>
        <div class="elements-wrapper_1">
        <?php
	}

    // Подключение ссылки на Instagram магазина
	add_action( 'tr_footer_parts', 'trainssy_footer_inst', 65 );
	function trainssy_footer_inst() {
		get_template_part( 'template-parts/footer/inst-link' );
	}

    // Подключение информации о самовывозе
	add_action( 'tr_footer_parts', 'trainssy_footer_pickup_info', 70 );
	function trainssy_footer_pickup_info() {
		get_template_part( 'template-parts/footer/pickup-info' );
	}

    // Подключение конца обертки(2) элементов
	add_action( 'tr_footer_parts', 'trainssy_footer_wrapper2_end', 75 );
	function trainssy_footer_wrapper2_end() {
		?>
        </div>
        <?php
	}

    // Подключение видов платежных систем
	add_action( 'tr_footer_parts', 'trainssy_footer_banking_options', 80 );
	function trainssy_footer_banking_options() {
		get_template_part( 'template-parts/footer/banking-options' );
	}

    // Подключение якоря (разрешение <425)
	add_action( 'tr_footer_parts', 'trainssy_footer_anchor_mobile', 85 );
	function trainssy_footer_anchor_mobile() {
		get_template_part( 'template-parts/footer/anchor-mobile' );
	}

    // Подключение конца второго ряда подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_column_second_end', 90 );
	function trainssy_footer_column_second_end() {
		?>
        </div>
        <?php
	}

    // Подключение конца подвала
	add_action( 'tr_footer_parts', 'trainssy_footer_end', 95 );
	function trainssy_footer_end() {
		?>
                    </div>
                </div>
            </div>
        </footer>
        <?php
	}

	// Подключение плашки с уведомлением об использовании cookies
	add_action( 'tr_footer_parts', 'trainssy_cookie_notice', 100 );
	function trainssy_cookie_notice() {
		get_template_part( 'template-parts/cookie-notice' );
	}
?>