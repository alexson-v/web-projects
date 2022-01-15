<?php
/**
 * Variable product add to cart
 *
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>
		<div class="selling-block__variations-wrapper">
			<?php echo do_shortcode( '[wpclv]' ); ?>
			<div class="selling-block__options variations" cellspacing="0">
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>
					<div class="selling-block__option">
						<h6 for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></h6>
						<div class="option-bundle">
							<?php
								wc_dropdown_variation_attribute_options(
									array(
										'options'   => $options,
										'attribute' => $attribute_name,
										'product'   => $product,
									)
								);
								echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a href="#popup_table" class="selling-block__sizetable-button popup-table-link">Таблица размеров</a>' ) ) : '';	
							?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="single_variation_wrap">
			
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 * 
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked trainssy_product_avaliability - 14
				 * @hooked trainssy_cta_block_wrapper_start - 17
				 * @hooked woocommerce_template_single_price - 18
				 * @hooked trainssy_cta_btn_wrapper_start - 19
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20
				 * @hooked trainssy_add_to_wishlist - 25
				 * @hooked trainssy_cta_btn_wrapper_end - 30
				 * @hooked trainssy_general_product_info - 35
				 * @hooked trainssy_cta_announcement_desktop - 40
				 * @hooked trainssy_cta_block_wrapper_end - 45
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
