<?php
/**
 * Related Products
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="additional-goods">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h4 class="additional-goods__title">Вам также может понравиться</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 additional-goods__desktop">

					<?php foreach ( $related_products as $related_product ) : ?>

							<?php
							$post_object = get_post( $related_product->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

							wc_get_template_part( 'content', 'product' );
							?>

					<?php endforeach; ?>
					
				</div>
			</div>
			<div class="row additional-goods__slider">
				<div class="col-xl-12">
					<div class="swiper-container slider-product_additionals">
						<div class="swiper-wrapper">
							<?php foreach ( $related_products as $related_product ) : ?>

								<div class="swiper-slide">
									<?php
									$post_object = get_post( $related_product->get_id() );

									setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
									?>
		
									<?php
									wc_get_template_part( 'content', 'product' );
									?>
								</div>

							<?php endforeach; ?>
						</div>
						<div class="swiper-scrollbar"></div>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<?php endif;

wp_reset_postdata();
