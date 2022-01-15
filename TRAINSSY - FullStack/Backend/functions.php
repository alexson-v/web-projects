<?php
	if ( ! defined( '_S_VERSION' ) ) {
		// Replace the version number of the theme on each release.
		define( '_S_VERSION', '1.0.0' );
	}

	// Подключение плагина Carbon Fields
	add_action( 'after_setup_theme', 'crb_load' );
	function crb_load() {
		load_template( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
		\Carbon_Fields\Carbon_Fields::boot();
	}
	add_action( 'carbon_fields_register_fields', 'ast_register_custom_fields' );
	function ast_register_custom_fields() {
		require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
		require get_template_directory() . '/inc/custom-fields-options/metabox.php';
	}
	
	// Подключение php-файла с настройками темы
	require get_template_directory() . '/inc/theme-settings.php';

	// Подключение php-файла со скриптами и стилями
	require get_template_directory() . '/inc/enqueue-script-style.php';

	// Подключение php-файлов с функциями темы
	require get_template_directory() . '/theme-functions/trainssy-landing-functions.php' ;
	require get_template_directory() . '/theme-functions/trainssy-help-page-functions.php';
	require get_template_directory() . '/theme-functions/trainssy-legal-info-page-functions.php';
	require get_template_directory() . '/theme-functions/trainssy-404-page-functions.php' ;

	// Подключение php-файла с полями виджетов
	require get_template_directory() . '/inc/widget-areas.php';

	// Подключение php-файла с настройками навигации
	require get_template_directory() . '/inc/navigations.php';

	// Подключение шапки темы
	require get_template_directory() . '/inc/custom-header.php';

	// Подключение подвала темы
	require get_template_directory() . '/inc/custom-footer.php';

	// Custom template tags for this theme.
	require get_template_directory() . '/inc/template-tags.php';

	// Functions which enhance the theme by hooking into WordPress.
	require get_template_directory() . '/inc/template-functions.php';

	// Customizer additions.
	require get_template_directory() . '/inc/customizer.php';

	// Load Jetpack compatibility file.
	if ( defined( 'JETPACK__VERSION' ) ) {
		require get_template_directory() . '/inc/jetpack.php';
	}

	// Подключение файлов, связанных с WooCommerce
	if ( class_exists( 'WooCommerce' ) ) {
		require get_template_directory() . '/inc/woocommerce.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-global.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-archive.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-product.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-checkout.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-account.php';
		require get_template_directory() . '/woocommerce/inc/wc-functions-authorization.php';
	}