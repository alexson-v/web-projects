<?php
	/**
     * Template Name: Страница помощи
	 *
	 * @package trainssy
	 */

	get_header();


    /**
     * Hook: trainssy_help_before_main_section
     * 
     * @hooked trainssy_ui_section_help_wrapper_start - 5
     * @hooked woocommerce_breadcrumb - 10
     * @hooked trainssy_ui_section_help_wrapper_end - 15
     */
    do_action( 'trainssy_help_before_main_section' );

    /**
     * Hook: trainssy_help_main_section
     * 
     * @hooked trainssy_main_section_help_wrapper_start - 5
     * @hooked trainssy_main_block_help_wrapper_start - 10
     * @hooked trainssy_help_tab_triggers - 15
     * @hooked trainssy_help_tab_content_purchase - 20
     * @hooked trainssy_help_tab_content_return - 25
     * @hooked trainssy_main_block_help_wrapper_end - 30
     * @hooked trainssy_contacts_block - 35
     * @hooked trainssy_main_section_help_wrapper_end - 40
     */
    do_action( 'trainssy_help_main_section' );

    /**
     * Hook: trainssy_help_after_main_section
     */
    do_action( 'trainssy_help_after_main_section' );


    get_footer();