<?php
    /**
     * Файл для подключения скриптов и стилей
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Подключение скриптов
    add_action( 'wp_enqueue_scripts', 'trainssy_scripts' );
    function trainssy_scripts() {

        wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/minified/SmoothScroll.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'maskedinput-jquery', get_template_directory_uri() . '/assets/js/minified/jquery.maskedinput.min.js', array('jquery'), null, true );

        if ( is_front_page() ) {
            wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/minified/swiper.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-swiper', get_template_directory_uri() . '/assets/js/minified/swiper-sliders.min.js', array('swiper'), null, true );
            wp_enqueue_script( 'tr-script-main', get_template_directory_uri() . '/assets/js/minified/main.min.js', array('jquery'), null, true );
        } elseif ( is_archive() ) {
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-catalogue', get_template_directory_uri() . '/assets/js/minified/catalogue.min.js', array('jquery'), null, true );
        } elseif ( is_product() ) {
            wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/minified/swiper.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-swiper', get_template_directory_uri() . '/assets/js/minified/swiper-sliders.min.js', array('swiper'), null, true );
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-product', get_template_directory_uri() . '/assets/js/minified/product.min.js', array('jquery'), null, true );
        } elseif ( is_checkout() ) {
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-purchase', get_template_directory_uri() . '/assets/js/minified/purchase.min.js', array('jquery'), null, true );
        } elseif ( is_account_page() ) {
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-account', get_template_directory_uri() . '/assets/js/minified/account.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-authorization', get_template_directory_uri() . '/assets/js/minified/authorization.min.js', array('jquery'), null, true );
        } elseif ( is_page( 461 ) ) {
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-help', get_template_directory_uri() . '/assets/js/minified/help.min.js', array('jquery'), null, true );
        } elseif ( is_page( 770 ) ) {
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-help', get_template_directory_uri() . '/assets/js/minified/help.min.js', array('jquery'), null, true );
        } elseif ( is_404() ) {
            wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/minified/swiper.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-common', get_template_directory_uri() . '/assets/js/minified/common.min.js', array('jquery'), null, true );
            wp_enqueue_script( 'tr-script-swiper', get_template_directory_uri() . '/assets/js/minified/swiper-sliders.min.js', array('swiper'), null, true );
        }

        wp_enqueue_script( 'customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), null, true );
        wp_enqueue_script( 'trainssy-navigation', get_template_directory_uri() . '/assets/js/minified/navigation.min.js', array(), null, true );
    }
    
    // Подключение стилей
    add_action( 'wp_enqueue_scripts', 'trainssy_styles' );
    function trainssy_styles() {

        wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/minified/bootstrap.min.css', array(), null, 'all' );
        wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/minified/fonts.min.css', array(), null, 'all' );

        if ( is_front_page() ) {
            wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/minified/swiper.min.css', array(), null, 'all' );
            wp_enqueue_style( 'tr-style-main', get_template_directory_uri() . '/assets/css/minified/main.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_archive() ) {
            wp_enqueue_style( 'tr-style-catalogue', get_template_directory_uri() . '/assets/css/minified/catalogue.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_product() ) {
            wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/minified/swiper.min.css', array(), null, 'all' );
            wp_enqueue_style( 'tr-style-product', get_template_directory_uri() . '/assets/css/minified/product.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_checkout() ) {
            wp_enqueue_style( 'tr-style-purchase', get_template_directory_uri() . '/assets/css/minified/purchase.min.css', array('tr-style'), null, 'all' );
            wp_enqueue_style( 'tr-style-registration', get_template_directory_uri() . '/assets/css/minified/registration.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_account_page() ) {
            wp_enqueue_style( 'tr-style-account', get_template_directory_uri() . '/assets/css/minified/account.min.css', array('tr-style'), null, 'all' );
            wp_enqueue_style( 'tr-style-authorization', get_template_directory_uri() . '/assets/css/minified/authorization.min.css', array('tr-style'), null, 'all' );
            wp_enqueue_style( 'tr-style-registration', get_template_directory_uri() . '/assets/css/minified/registration.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_page( 461 ) ) {
            wp_enqueue_style( 'tr-style-help', get_template_directory_uri() . '/assets/css/minified/help.min.css', array('tr-style'), null, 'all' );   
        } elseif ( is_page( 770 ) ) {
            wp_enqueue_style( 'tr-style-legal-info', get_template_directory_uri() . '/assets/css/minified/legal-info.min.css', array('tr-style'), null, 'all' );
        } elseif ( is_404() ) {
            wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/minified/swiper.min.css', array(), null, 'all' );
            wp_enqueue_style( 'tr-style-error404', get_template_directory_uri() . '/assets/css/minified/error404.min.css', array('tr-style'), null, 'all' );
        }

        wp_enqueue_style( 'tr-style', get_stylesheet_uri(), array('bootstrap-style') );        
    }
?>