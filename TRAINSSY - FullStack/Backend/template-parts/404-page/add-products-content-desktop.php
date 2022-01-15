<?php
    /**
     * Часть шаблона: Контент дополнительных товаров (десктоп).
     * Подключено к файлу: trainssy-404-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="row">
    <div class="col-xl-12 additional-goods__desktop page-404">
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'product_cat' => 'all-products',
                'orderby'  => 'date',
            );

            $loop = new WP_Query( $args );
        
            while ( $loop->have_posts() ) : $loop->the_post(); 
            global $product; 

            wc_get_template_part( 'content', 'product' );
        
            endwhile; 
        
            wp_reset_query(); 
        ?>
    </div>
</div>