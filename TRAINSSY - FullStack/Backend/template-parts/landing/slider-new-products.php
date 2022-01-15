<?php
    /**
     * Часть шаблона: Swiper-слайдер с карточками новых товаров
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="swiper-container slider-new-products">
    <h4>Самые свежие новинки</h4>
    <div class="swiper-wrapper">
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 10,
                'product_cat' => 'all-products',
                'orderby'  => 'date',
            );

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post(); 
            global $product; 
            ?>
            <div class="swiper-slide">
            <?php wc_get_template_part( 'content', 'product' ); ?>
            </div>
            <?php
            endwhile; 

            wp_reset_query(); 
        ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
</div>