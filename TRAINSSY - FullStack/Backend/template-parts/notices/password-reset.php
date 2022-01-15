<?php
    /**
     * Часть шаблона: Уведомление об успешном сбросе пароля.
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    if ( is_wc_endpoint_url('lost-password') ) {
        wc_print_notice( esc_html__( 'Password reset email has been sent.', 'woocommerce' ) );
    }
?>