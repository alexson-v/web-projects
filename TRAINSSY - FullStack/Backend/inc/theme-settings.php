<?php
    /**
	 * Настройки темы.
	 * Подключено к functions.php
	 *
	 * @package trainssy
	 */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    if ( ! function_exists( 'trainssy_setup' ) ) :
        function trainssy_setup() { 
            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'post-thumbnails' );
    
            add_theme_support(
                'html5',
                array(
                    'search-form',
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                )
            );
    
            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );
    
            /**
             * Add support for core custom logo.
             *
             * @link https://codex.wordpress.org/Theme_Logo
             */
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 250,
                    'width'       => 250,
                    'flex-width'  => true,
                    'flex-height' => true,
                )
            );
        }
    endif;
    add_action( 'after_setup_theme', 'trainssy_setup' );
    
    
    function trainssy_content_width() {
        $GLOBALS['content_width'] = apply_filters( 'trainssy_content_width', 640 );
    }
    add_action( 'after_setup_theme', 'trainssy_content_width', 0 );


?>