<?php
/**
 * EquipYourMen functions and definitions
 *
 * @package EquipYourMen
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'carbon_fields_register_fields', 'ast_register_custom_fields' );
function ast_register_custom_fields() {
	require get_template_directory() . '/inc/custom-fields-options/metabox.php';
}

function equipyourmen_setup() {
	load_theme_textdomain( 'equipyourmen', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'equipyourmen' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'equipyourmen_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'custom-logo' );
	add_theme_support( 'menus' );

	// Додатковий білий логотип (українською)
	add_action( 'customize_register', 'logo_customize_register' );
	function logo_customize_register( $wp_customize ) {
		$wp_customize->add_setting('footer_logo', array(
			'default' => '',
			'sanitize_callback' => 'absint',
		));
	
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
			'section' => 'title_tagline',
			'label' => 'Біле лого'
		)));
	
		$wp_customize->selective_refresh->add_partial('footer_logo', array(
			'selector' => '.logo',
			'render_callback' => function() {
				$logo = get_theme_mod('footer_logo');
				$img = wp_get_attachment_image_src($logo, 'full');
				if ($img) {
					return '<img src="' . $img[0] . '" alt="">';
				} else {
					return '';
				}
			}
		));
	}

	// Чорний логотип (англійською)
	add_action( 'customize_register', 'eng_header_logo_customize_register' );
	function eng_header_logo_customize_register( $wp_customize ) {
		$wp_customize->add_setting('header_eng_logo', array(
			'default' => '',
			'sanitize_callback' => 'absint',
		));
	
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_eng_logo', array(
			'section' => 'title_tagline',
			'label' => 'Чорний логотип (англійською)'
		)));
	
		$wp_customize->selective_refresh->add_partial('header_eng_logo', array(
			'selector' => '.logo',
			'render_callback' => function() {
				$logo = get_theme_mod('header_eng_logo');
				$img = wp_get_attachment_image_src($logo, 'full');
				if ($img) {
					return '<img src="' . $img[0] . '" alt="">';
				} else {
					return '';
				}
			}
		));
	}

	// Білий логотип (англійською)
	add_action( 'customize_register', 'eng_footer_logo_customize_register' );
	function eng_footer_logo_customize_register( $wp_customize ) {
		$wp_customize->add_setting('footer_eng_logo', array(
			'default' => '',
			'sanitize_callback' => 'absint',
		));
	
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_eng_logo', array(
			'section' => 'title_tagline',
			'label' => 'Білий логотип (англійською)'
		)));
	
		$wp_customize->selective_refresh->add_partial('footer_eng_logo', array(
			'selector' => '.logo',
			'render_callback' => function() {
				$logo = get_theme_mod('footer_eng_logo');
				$img = wp_get_attachment_image_src($logo, 'full');
				if ($img) {
					return '<img src="' . $img[0] . '" alt="">';
				} else {
					return '';
				}
			}
		));
	}

}
add_action( 'after_setup_theme', 'equipyourmen_setup' );

function equipyourmen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'equipyourmen_content_width', 640 );
}
add_action( 'after_setup_theme', 'equipyourmen_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'equipyourmen_scripts' );
function equipyourmen_scripts() {
	wp_enqueue_style( 'equipyourmen-style', get_stylesheet_uri() );
	wp_enqueue_script( 'equipyourmen-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), null, true  );
	wp_enqueue_script( 'equipyourmen-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true  );
}

add_filter( 'show_admin_bar', '__return_false' );