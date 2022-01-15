<?php
    /**
     *  Сайдбар магазина.
     *  Инициализируется в widget-areas.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
        return;
    }
    dynamic_sidebar( 'sidebar-shop' );
?>