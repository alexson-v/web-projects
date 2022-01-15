<?php
	/**
	 * My Account Dashboard
	 * !Вкладка исполняет функции вывода "Избранных товаров".
	 *
	 * Shows the first intro screen on the account dashboard.
	 *
	 * @package WooCommerce\Templates
	 * @version 4.4.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	dynamic_sidebar('wishlist-widget');