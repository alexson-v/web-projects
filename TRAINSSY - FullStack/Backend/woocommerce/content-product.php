<?php
/**
 * The template for displaying product content within loops
 *
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'product-card', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 * 
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 * @hooked woocommerce_template_loop_product_link_end - 15
	 * 
	 * @hooked woocommerce_show_product_loop_sale_flash - 5 (отключен)
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 * 
	 * @hooked trainssy_product_details_wrapper_start - 5
	 * @hooked trainssy_product_card_title - 10
	 * 
	 * @hooked woocommerce_template_loop_product_title - 10 (отключен)
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_price - 10
	 * @hooked trainssy_product_add_to_wishlist - 15
	 * 
	 * @hooked trainssy_product_details_wrapper_end - 20
	 * 
	 * @hooked woocommerce_template_loop_rating - 5 (отключен)
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5 (отключен)
	 * @hooked woocommerce_template_loop_add_to_cart - 10 (отключен)
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>

