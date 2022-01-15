<?php
    /**
     * Template Name: Главная страница
     * 
     * The main template file
     *
     * @package trainssy
     */

    get_header();


    /**
	 * Hook: trainssy_landing_offer_slider
	 *
	 * @hooked trainssy_slider_offer_section_wrapper_start - 5
     * @hooked trainssy_slider_offer - 10
     * @hooked trainssy_slider_offer_section_wrapper_start - 15
	 */
	do_action( 'trainssy_landing_offer_slider' );

    /**
	 * Hook: trainssy_landing_top_banners
	 *
     * @hooked trainssy_medium_banners_section - 5
     * @hooked trainssy_big_top_banner_section - 10
	 */
	do_action( 'trainssy_landing_top_banners' );

    /**
	 * Hook: trainssy_landing_new_products
	 *
     * @hooked trainssy_new_products_section_start - 5
     * @hooked trainssy_new_products_slider - 10
     * @hooked trainssy_new_products_section_end - 15
	 */
	do_action( 'trainssy_landing_new_products' );

    /**
	 * Hook: trainssy_landing_cats_previews_bottom
	 *
     * @hooked trainssy_big_bottom_banner_section - 5
     * @hooked trainssy_small_banners_section - 10
	 */
	do_action( 'trainssy_landing_bottom_banners');

    /**
     * Hook: trainssy_landing_descr
     * 
     * @hooked trainssy_descr_section_wrapper_start - 5
     * @hooked trainssy_descr_section_text - 10
     * @hooked trainssy_descr_section_wrapper_end - 15
     */
    do_action( 'trainssy_landing_descr' );

    /**
     * Hook: trainssy_landing_brands
     * 
     * @hooked trainssy_brands_section_wrapper_start - 5
     * @hooked trainssy_brands_section_logos - 10
     * @hooked trainssy_brands_section_wrapper_end - 15
     */
    do_action( 'trainssy_landing_brands' );

    
    get_footer();