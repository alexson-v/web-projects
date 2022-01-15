<?php
    /**
     * Template Name: Правовая информация
     *
     * @package trainssy
     */

    get_header();


    /**
     * trainssy_before_offer_terms hook.
     * 
     * @hooked trainssy_ui_section_help_wrapper_start - 5
     * @hooked woocommerce_breadcrumb - 10
     * @hooked trainssy_ui_section_help_wrapper_end - 15
     */
    do_action( 'trainssy_before_offer_terms' );

    /**
     * trainssy_before_offer_terms hook.
     * 
     * @hooked trainssy_main_section_terms_wrapper_start - 5
     * @hooked trainssy_terms_wrapper_start - 10
     * @hooked trainssy_terms_tab_triggers - 15
     * @hooked trainssy_offer_terms_document - 20
     * @hooked trainssy_privacy_policy_document - 25
     * @hooked trainssy_terms_wrapper_end - 30
     * @hooked trainssy_contacts_block - 35
     * @hooked trainssy_main_section_terms_wrapper_end - 40
     */
    do_action( 'trainssy_offer_terms' );


    get_footer();