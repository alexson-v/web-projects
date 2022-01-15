<?php
/**
 * External product add to cart
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart" action="<?php echo esc_url( $product_url ); ?>" method="get">
	
		<?php
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

	<button type="submit" class="single_add_to_cart_button button alt btn selling-block__purchase-btn"><?php echo esc_html( $button_text ); ?></button>

	<?php wc_query_string_form_fields( $product_url ); ?>

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
	
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
