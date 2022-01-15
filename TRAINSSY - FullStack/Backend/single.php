<?php
    /**
     * The template for displaying all single posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package trainssy
     */

    get_header();


    /**
     * Hook: trainssy_before_news_post
     * 
     * @hooked trainssy_ui_section_news_post_wrapper_start - 5
     * @hooked woocommerce_breadcrumb - 10
     * @hooked trainssy_ui_section_news_post_wrapper_end - 15
     * @hooked trainssy_news_post_article_start - 20
     */
    do_action( 'trainssy_before_news_post' );

    while ( have_posts() ) :
        
        the_post();
        get_template_part( 'template-parts/content', 'page' );

    endwhile;

    /**
     * Hook: trainssy_after_news_post
     * 
     * @hooked trainssy_news_post_article_end - 5
     */
    do_action( 'trainssy_after_news_post' );


    get_footer();