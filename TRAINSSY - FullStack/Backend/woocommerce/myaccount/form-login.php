<?php
	/**
	 * Login Form
	 *
	 * @package WooCommerce\Templates
	 * @version 4.1.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	// Разделение страницы авторизации на форму логина и форму регистрации
    if ( isset($_GET['action']) == 'register' ) {
		wc_get_template( 'myaccount/form-registration.php' );
	} else {
		wc_get_template( 'myaccount/form-login-single.php' );
	}
?>