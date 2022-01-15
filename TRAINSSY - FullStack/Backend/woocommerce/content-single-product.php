<?php
	/**
	 * The template for displaying product content in the single-product.php template
	 *
	 * @package WooCommerce\Templates
	 * @version 3.6.0
	 */

	defined( 'ABSPATH' ) || exit;

	global $product;
	?>

	<section class="notice">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<?php
						/**
						 * Hook: woocommerce_before_single_product.
						 * 
						 * @hooked woocommerce_output_all_notices - 10
						 */
						do_action( 'woocommerce_before_single_product' );

						if ( post_password_required() ) {
							echo get_the_password_form(); // WPCS: XSS ok.
							return;
						}
					?>

				</div>
			</div>
		</div>
	</section>

	<section class="main-block" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="main-block__product">

						<?php
							/**
							 * Hook: woocommerce_before_single_product_summary.
							 *
							 * @hooked trainssy_single_product_big_wrapper_start - 5
							 * @hooked trainssy_single_product_tab_triggers - 10
							 * 
							 * @hooked woocommerce_show_product_sale_flash - 10 (отключен)
							 * @hooked woocommerce_show_product_images - 20 (переподключен)
							 */
							do_action( 'woocommerce_before_single_product_summary' );
						?>

						<?php
							/**
							 * Hook: woocommerce_single_product_summary.
							 * 
							 * @hooked trainssy_single_product_tab_1_wrapper_start - 5
							 * @hooked woocommerce_show_product_images - 7 (подключен)
							 * @hooked trainssy_gallery_common_mobile - 8
							 * @hooked trainssy_selling_block_wrapper_start - 9
							 * @hooked woocommerce_template_single_add_to_cart - 30
							 * @hooked WC_Structured_Data::generate_product_data() - 60
							 * @hooked trainssy_selling_block_wrapper_end - 65
							 * @hooked trainssy_cta_announcement_tablet - 70
							 * @hooked trainssy_single_product_tab_1_wrapper_end - 75
							 * 
							 * @hooked trainssy_single_product_tab_2_wrapper_start - 85
							 * @hooked trainssy_product_descr - 90
							 * @hooked trainssy_single_product_tab_2_wrapper_end - 95
							 * 
							 * @hooked trainssy_single_product_tab_3_wrapper_start - 105
							 * @hooked trainssy_gallery_images_desktop - 110
							 * @hooked trainssy_single_product_tab_3_wrapper_end - 115
							 * 
							 * @hooked trainssy_single_product_tab_4_wrapper_start - 125
							 * @hooked trainssy_product_testimonials - 130
							 * @hooked trainssy_single_product_tab_4_wrapper_end - 135
							 * 
							 * @hooked trainssy_single_product_big_wrapper_end - 140
							 *
							 *
							 * @hooked woocommerce_template_single_title - 5 (отключен)
							 * @hooked woocommerce_template_single_price - 10 (переподключен в variable.php)
							 * @hooked woocommerce_template_single_rating - 10 (отключен)
							 * @hooked woocommerce_template_single_excerpt - 20 (отключен)
							 * @hooked woocommerce_template_single_meta - 40 (отключен)
							 * @hooked woocommerce_template_single_sharing - 50 (переподключен в share-btn-mobile.php)
							 */
							do_action( 'woocommerce_single_product_summary' );
						?>

						<?php
							/**
							 * Hook: woocommerce_after_single_product_summary.
							 * 
							 * @hooked trainssy_product_sticky_card_wrapper_start - 5
							 * 
							 * @hooked trainssy_gallery_sticky_card - 10
							 * @hooked trainssy_product_avaliability - 20
							 * @hooked trainssy_cta_block_wrapper_start - 25
							 * @hooked woocommerce_template_single_price - 30
							 * @hooked trainssy_cta_btn_wrapper_start - 35
							 * @hooked trainssy_fake_add_to_cart_button - 40
							 * @hooked trainssy_add_to_wishlist - 45
							 * @hooked trainssy_cta_btn_wrapper_end - 50
							 * @hooked trainssy_cta_block_wrapper_end - 55
							 * @hooked trainssy_cta_announcement_desktop - 60
							 * 
							 * @hooked trainssy_product_sticky_card_wrapper_end - 65
							 * 
							 * 
							 * @hooked woocommerce_output_product_data_tabs - 10 (отключение)
							 * @hooked woocommerce_output_related_products - 20 (переподключен)
							 * @hooked woocommerce_upsell_display - 15 (отключен)
							 */
							do_action( 'woocommerce_after_single_product_summary' );
						?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		/**
		 * Hook: woocommerce_after_single_product
		 * 
		 * @hooked woocommerce_output_related_products - 5
		 */
		do_action( 'woocommerce_after_single_product' );
	?>