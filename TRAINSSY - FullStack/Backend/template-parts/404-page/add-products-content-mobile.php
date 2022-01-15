<?php
    /**
     * Часть шаблона: Контент дополнительных товаров (мобильная версия).
     * Подключено к файлу: trainssy-404-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="additional-goods__slider">
    <div class="swiper-container slider-product_additionals page-404">
        <div class="swiper-wrapper">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                    'product_cat' => 'all-products',
                    'orderby'  => 'date',
                );

                $loop = new WP_Query( $args );
            
                while ( $loop->have_posts() ) : $loop->the_post(); 
                global $product;

                echo '<div class="swiper-slide">';
                wc_get_template_part( 'content', 'product' );
                echo '</div>';
                endwhile; 
            
                wp_reset_query(); 
            ?>
        </div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>