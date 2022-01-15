<?php
    /**
     * Часть шаблона: Форма регистрации WooCommerce
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    /**
     * Hook: woocommerce_register_form_start
     * 
     * @hooked trainssy_ui_section_reg_wrapper_start - 5
     * @hooked woocommerce_breadcrumb - 10
     * @hooked trainssy_ui_section_reg_wrapper_end - 15
     * @hooked trainssy_all_notices_output_wrapper_start - 20
     * @hooked woocommerce_output_all_notices - 25
     * @hooked trainssy_all_notices_output_wrapper_end - 30
     * @hooked trainssy_reg_section_wrapper_start - 35
     */
    do_action( 'woocommerce_register_form_start' );

    /**
     * Hook: woocommerce_register_form
     * 
     * @hooked trainssy_reg_form - 5
     */
    do_action( 'woocommerce_register_form' );

    /**
     * Hook: woocommerce_register_form_end
     * 
     * @hooked trainssy_reg_section_wrapper_end - 5
     */
    do_action( 'woocommerce_register_form_end' );
?>