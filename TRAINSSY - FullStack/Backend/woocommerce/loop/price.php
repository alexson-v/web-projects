<?php
	/**
	 * Loop Price
	 *
	 * @see         https://docs.woocommerce.com/document/template-structure/
	 * @package     WooCommerce\Templates
	 * @version     1.6.4
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	global $product;
?>

<div class="bottom">
		<?php
			if( $product->is_type( 'variable' ) ) {
				$product_variations = $product->get_available_variations();

				$variation_product_id = $product_variations [0]['variation_id'];
				$variation_product = new WC_Product_Variation( $variation_product_id );

				$price_sale = get_post_meta( get_the_ID(), '_sale_price', true);

				if ( $product->is_on_sale() ) {
					echo '<h5 class="previous">' . wc_price($variation_product ->regular_price) . '</h5>';
				} 
			} elseif ( $product->is_on_sale() ) {
				echo '<h5 class="previous">' . wc_price($product->regular_price) . '</h5>';
			}
		?>

		<?php if ( $product->is_on_sale() ) {
			echo '<h5 style="color: #FF5151;">';
		} else echo '<h5>';
			$product = wc_get_product(get_the_ID());
			$thePrice = $product->get_price();
			echo wc_price($thePrice);
		?>
	</h5>
</div>