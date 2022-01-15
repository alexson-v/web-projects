<?php
	/**
	 * Single Product Price
	 *
	 * @package WooCommerce\Templates
	 * @version 3.0.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	global $product;
?>
<div class="selling-block_price-wrapper">
	<h6 class="selling-block__price-previous">
		<?php
			if( $product->is_type( 'variable' ) ) {
			
				$product_variations = $product->get_available_variations();

				$variation_product_id = $product_variations [0]['variation_id'];
				$variation_product = new WC_Product_Variation( $variation_product_id );

				$price_sale = get_post_meta( get_the_ID(), '_sale_price', true);

				if ( $product->is_on_sale() ) {
					echo wc_price($variation_product->regular_price);
				}

			} elseif ( $product->is_on_sale() ) {
				echo wc_price($product->regular_price);
			}
		?>
	</h6>
	<h3 class="selling-block__price-present">
		<?php
			$product = wc_get_product(get_the_ID());
			$thePrice = $product->get_price();
			echo wc_price($thePrice);
		?>
	</h3>
</div>
