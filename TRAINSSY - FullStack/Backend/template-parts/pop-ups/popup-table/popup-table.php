<?php
    /**
     * Часть шаблона: Таблица размеров товара.
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    global $product;
    global $post;
?>

<div id="popup_table" class="popup_table">
    <div class="table_popup__body">
        <?php
            if ( is_product() ) {
                $terms = wp_get_post_terms( $post->ID, 'product_cat' );
                foreach ( $terms as $term ) $categories[] = $term->slug;
                if ( has_term( array( 'shoes-men', 'shoes-women' ), 'product_cat' ) ) {
                    get_template_part( 'template-parts/pop-ups/popup-table/tables/sizetable-shoes' );
                }
            
                $tag_terms = wc_get_product_terms( $post->ID, 'product_tag' );
                if ( ! empty( $tag_terms ) && ! is_wp_error( $tag_terms ) ){
                    foreach ( $tag_terms as $tag_term ) $tag_terms[] = $tag_term->name;
                    if ( has_term( 'men-top-sizes', 'product_tag' ) ) {
                        get_template_part( 'template-parts/pop-ups/popup-table/tables/sizetable-tops-men' );
                    } elseif ( has_term( 'men-bottom-sizes', 'product_tag' ) ) {
                        get_template_part( 'template-parts/pop-ups/popup-table/tables/sizetable-bottoms-men' );
                    } elseif ( has_term( 'women-top-sizes', 'product_tag' ) ) {
                        get_template_part( 'template-parts/pop-ups/popup-table/tables/sizetable-tops-women' );
                    } elseif ( has_term( 'women-bottom-sizes', 'product_tag' ) ) {
                        get_template_part( 'template-parts/pop-ups/popup-table/tables/sizetable-bottoms-women' );
                    }
                }
            }
        ?>
    </div>
</div>
