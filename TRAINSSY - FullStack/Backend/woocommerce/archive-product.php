<?php
	/**
	 * The Template for displaying product archives, including the main shop page which is a post type archive
	 *
	 * @package WooCommerce\Templates
	 * @version 3.4.0
	 */

	defined( 'ABSPATH' ) || exit;

	get_header( 'shop' );

	/**
	 * Hook: woocommerce_before_main_content
	 * !Не действует.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (отключен)
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 * @hooked woocommerce_breadcrumb - 20 (отключен)
	 */
	do_action( 'woocommerce_before_main_content' );
	?>

	<?php
	/**
	 * Hook: trainssy_archive_before_main_content.
	 *
	 * @hooked trainssy_advert_banner_section - 5
	 * @hooked woocommerce_output_content_wrapper - 10 (переподключен)
	 * @hooked trainssy_inside_wrapper_start - 15
	 */
	do_action( 'trainssy_archive_before_main_content' );
	?>

	<?php
	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked trainssy_sidebar_wrapper_start - 5
	 * @hooked woocommerce_get_sidebar - 10
	 * @hooked trainssy_sidebar_wrapper_end - 15
	 */
	do_action( 'woocommerce_sidebar' );
	?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 * 
	 * @hoooked trainssy_archive_main_area_start - 5
	 * @hooked trainnsy_search_btn_mobile - 6
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10 (отключен)
	 * @hooked woocommerce_product_archive_description - 10 (отключен)
	 */
	do_action( 'woocommerce_archive_description' );
	?>

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked trainssy_userbar_wrapper_start - 5
	 * 
	 * @hooked trainssy_left_userbar_inside_wrapper_start - 10
 	 * @hooked woocommerce_breadcrumb - 15 (переподключен)
	 * @hooked trainssy_category_title - 17
	 * @hooked trainssy_filter_mobile_wrapper_start - 19
	 * @hooked woocommerce_result_count - 20
	 * @hooked trainssy_filter_btn_mobile - 21
	 * @hooked trainssy_filter_mobile_wrapper_end - 22
	 * @hooked trainssy_left_userbar_inside_wrapper_end - 25
	 * 
	 * @hooked trainssy_right_userbar_inside_wrapper_start - 30
	 * @hooked trainnsy_search_btn_desktop - 35
	 * @hooked trainssy_filter_btn_desktop - 40
	 * @hooked trainssy_right_userbar_inside_wrapper_end - 45
	 * @hooked trainssy_filter_dropdowns_desktop - 47
	 * 
	 * @hooked trainssy_userbar_wrapper_end - 50
	 * 
	 * 
	 * @hooked woocommerce_output_all_notices - 55 (переподключен)
	 * @hooked trainssy_userbar_line - 60
	 * 
	 * 
	 * @hooked woocommerce_output_all_notices - 10 (отключен)
	 * @hooked woocommerce_catalog_ordering - 30 (отключен)
	 */
	do_action( 'woocommerce_before_shop_loop' );

	if ( woocommerce_product_loop() ) {
		
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}

	/**
	 * Hook: woocommerce_after_main_content.
	 * !Не действует.
	 * 
	 * @hooked woocommerce_output_content_wrapper_end - 10 (отключен)
	 */
	do_action( 'woocommerce_after_main_content' );

	/**
	 * Hook: trainssy_archive_after_main_content.
	 * 
	 * @hoooked trainssy_archive_main_area_end - 4
	 * @hooked trainssy_inside_wrapper_end - 5
	 * @hooked woocommerce_output_content_wrapper_end - 10 (переподключен)
	 */
	do_action( 'trainssy_archive_after_main_content' );

	// Подключение мобильной версии пользовательского меню
	get_template_part( 'template-parts/archive/navbar-ui-mobile' );

	get_footer( 'shop' );