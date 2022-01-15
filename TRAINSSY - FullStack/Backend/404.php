<?php
	/**
	 * The template for displaying 404 pages (not found)
	 *
	 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
	 *
	 * @package trainssy
	 */

	get_header();


	/**
	 * Hook: trainssy_404_page_main_section
	 * 
	 * @hooked trainssy_main_section_wrapper_start - 5
	 * @hooked trainssy_main_section_notification - 10
	 * @hooked trainssy_main_section_image - 15
	 * @hooked trainssy_main_section_wrapper_end - 20
	 */
	do_action( 'trainssy_404_page_main_section' );

	/**
	 * Hook: trainssy_404_page_additional_products
	 * 
	 * @hooked trainssy_additional_products_wrapper_start - 5
	 * @hooked trainssy_additional_products_title - 10
	 * @hooked trainssy_additional_products_content_desktop - 15
	 * @hooked trainssy_additional_products_content_mobile - 20
	 * @hooked trainssy_additional_products_wrapper_end - 25
	 */
	do_action( 'trainssy_404_page_additional_products' );


	get_footer();