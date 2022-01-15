<?php
	/**
	 * Simple product add to cart
	 *
	 * @package WooCommerce\Templates
	 * @version 3.4.0
	 */

	defined( 'ABSPATH' ) || exit;

	global $product;

	if ( ! $product->is_purchasable() ) {
		return;
	}

	echo wc_get_stock_html( $product ); // WPCS: XSS ok.

	/**
	 * Hook: trainssy_simple_product_before_add_to_cart_btn
	 * 
	 * @hooked trainssy_limited_descr - 5
	 * @hooked trainssy_product_event_icons - 10
	 * @hooked trainssy_product_avaliability - 15
	 * @hooked trainssy_cta_block_wrapper_start - 20
	 * @hooked woocommerce_template_single_price - 25
	 * @hooked trainssy_cta_btn_wrapper_start - 30
	 */
	do_action( 'trainssy_simple_product_before_add_to_cart_btn' );

?>

<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
	<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt btn selling-block__purchase-btn">Купить</button>
</form>

<?php
	/**
	 * Hook: trainssy_simple_product_after_add_to_cart_btn
	 * 
	 * @hooked trainssy_add_to_wishlist - 5
	 * @hooked trainssy_cta_btn_wrapper_end - 10
	 * @hooked trainssy_general_product_info - 15
	 * @hooked trainssy_cta_announcement_desktop - 20
	 * @hooked trainssy_cta_block_wrapper_end - 25
	 */
	do_action( 'trainssy_simple_product_after_add_to_cart_btn' );
?>