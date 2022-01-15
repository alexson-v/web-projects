<?php
    /**
     * Часть шаблона: Swiper-slider на странице товара.
     * Применяется в табах "Все о товаре", "Фото" и липкой инфо-карточке.
     * 
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
    
    global $product;
    $post_thumbnail_id = $product->get_image_id();
    $attachment_ids = $product->get_gallery_image_ids();
?>

<div class="swiper-wrapper">
    <div class="swiper-slide">
        <div class="image-slider__image">
            <?php
                if ( $post_thumbnail_id ) {
                    $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
                } else {
                    $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
                }
        
                echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
            ?>
        </div>
    </div>
    <?php
        if ( $attachment_ids && $product->get_image_id() ) {
            foreach ( $attachment_ids as $attachment_id ) {
                ?>
                <div class="swiper-slide">
                    <div class="image-slider__image">
                        <?php echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); ?>
                    </div>
                </div>
                <?php
            }
        }
    ?>
</div>