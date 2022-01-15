<?php
    /**
     * Часть шаблона: Форма авторизации WooCommerce
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    /**
	 * Hook: woocommerce_before_customer_login_form
	 * 
	 * @hooked trainssy_ui_section_auth_wrapper_start - 5
	 * @hooked woocommerce_breadcrumb - 10
	 * @hooked trainssy_ui_section_auth_wrapper_end - 15
	 * @hooked trainssy_all_notices_output_wrapper_start - 20
	 * @hooked woocommerce_output_all_notices - 25
	 * @hooked trainssy_password_reset_notice - 30
	 * @hooked trainssy_all_notices_output_wrapper_end - 35
	 * @hooked trainssy_login_section_wrapper_start - 40
	 */
	do_action( 'woocommerce_before_customer_login_form' );

	/**
	 * Hook: woocommerce_login_form_start
	 * 
	 * @hooked trainssy_login_form_wrapper_start - 5
	 */
	do_action( 'woocommerce_login_form_start' );

	/**
	 * Hook: woocommerce_login_form
	 * 
	 * @hooked trainssy_login_form - 5
	 * @hooked trainssy_login_with_google - 10
	 */
	do_action( 'woocommerce_login_form' );

	/**
	 * Hook: woocommerce_login_form_end
	 * 
	 * @hooked trainssy_login_form_wrapper_end - 5
	 */
	do_action( 'woocommerce_login_form_end' );

	/**
	 * Hook: trainssy_register_cta
	 * 
	 * @hooked trainssy_register_cta_wrapper_start - 5
	 * @hooked trainssy_register_cta_content - 10
	 * @hooked trainssy_register_cta_wrapper_end - 15
	 */
	do_action( 'trainssy_register_cta' );
	
	/**
	 * Hook: woocommerce_after_customer_login_form
	 * 
	 * @hooked trainssy_login_section_wrapper_end - 5
	 */
	do_action( 'woocommerce_after_customer_login_form' );