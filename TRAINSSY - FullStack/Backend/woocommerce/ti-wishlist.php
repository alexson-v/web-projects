<?php
	/**
	 * The Template for displaying wishlist if a current user is owner.
	 *
	 * @version             1.24.5
	 * @package           TInvWishlist\Template
	 */

	if ( !defined('ABSPATH') ) {
		exit; // Exit if accessed directly.
	}

	wp_enqueue_script('tinvwl');
?>
<div class="main-block__account-favorites">
	<?php do_action('tinvwl_before_wishlist', $wishlist); ?>
	<?php if (function_exists('wc_print_notices') && isset(WC()->session)) {
		wc_print_notices();
	} ?>
	<?php
	$wl_paged = absint(get_query_var('wl_paged'));
	$form_url = tinv_url_wishlist($wishlist['share_key'], $wl_paged, true);
	?>
	<form action="<?php echo esc_url($form_url); ?>" method="post" autocomplete="off">
		<?php do_action('tinvwl_before_wishlist_table', $wishlist); ?>
		<div class="account-favorites__added">
			<?php do_action('tinvwl_wishlist_contents_before'); ?>

			<?php

			global $product, $post;
			// store global product data.
			$_product_tmp = $product;
			// store global post data.
			$_post_tmp = $post;

			

			foreach ($products as $wl_product) {

				if (empty($wl_product['data'])) {
					continue;
				}

				// override global product data.
				$product = apply_filters('tinvwl_wishlist_item', $wl_product['data']);
				// override global post data.
				$post = get_post($product->get_id());

				unset($wl_product['data']);
				if ($wl_product['quantity'] > 0 && apply_filters('tinvwl_wishlist_item_visible', true, $wl_product, $product)) {
					$product_url = apply_filters('tinvwl_wishlist_item_url', $product->get_permalink(), $wl_product, $product);
					do_action('tinvwl_wishlist_row_before', $wl_product, $product);
					?>
					<div class="good-in-favorites__content">
						<div class="good-in-favorites__basic-part">
							<div class="good-in-favorites__img">
								<?php
									$thumbnail = apply_filters('tinvwl_wishlist_item_thumbnail', $product->get_image(), $wl_product, $product);

									if (!$product->is_visible()) {
										echo $thumbnail; // WPCS: xss ok.
									} else {
										printf('<a href="%s">%s</a>', esc_url($product_url), $thumbnail); // WPCS: xss ok.
									}
								?>
							</div>
							<div class="good-in-favorites__elements-wrapper">
								<div class="good-in-favorites__elements-row">
									<div class="product-name">
										<?php
											echo apply_filters('tinvwl_wishlist_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_url), is_callable(array( $product, 'get_name' )) ? $product->get_name() : $product->get_title()), $wl_product, $product); // WPCS: xss ok.
											echo apply_filters('tinvwl_wishlist_item_meta_data', tinv_wishlist_get_item_data($product, $wl_product), $wl_product, $product); // WPCS: xss ok.
										?>
									</div>
									<button type="submit" name="tinvwl-remove" class="good-in-favorites__delete-icon" value="<?php echo esc_attr($wl_product['ID']); ?>" title="<?php _e('Remove', 'ti-woocommerce-wishlist') ?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/bin-icon.svg" alt="Удалить"></button>
								</div>
								<div class="good-in-favorites__code">Код: <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></div>
								<div class="good-in-favorites__elements-row__bottom desktop">
									<div class="good-in-favorites__price-wrapper">
										<?php echo apply_filters('tinvwl_wishlist_item_price', $product->get_price_html(), $wl_product, $product); // WPCS: xss ok. ?>
									</div>
									<a href="<?php echo esc_url($product_url); ?>" class="good-in-favorites__link">На страницу товара</a>
								</div>	
							</div>
						</div>
						<div class="good-in-favorites__elements-row__bottom mobile">
							<div class="good-in-favorites__price-wrapper">
								<?php echo apply_filters('tinvwl_wishlist_item_price', $product->get_price_html(), $wl_product, $product); // WPCS: xss ok. ?>
							</div>
							<a href="<?php echo esc_url($product_url); ?>" class="good-in-favorites__link">На страницу товара</a>
						</div>
					</div>
					<hr>
					<?php
					do_action('tinvwl_wishlist_row_after', $wl_product, $product);
				} // End if().
			} // End foreach().
			// restore global product data.
			$product = $_product_tmp;
			// restore global post data.
			$post = $_post_tmp;
			?>
			<?php do_action('tinvwl_wishlist_contents_after'); ?>
			<tfoot>
			<tr>
				<td colspan="100">
					<?php do_action('tinvwl_after_wishlist_table', $wishlist); ?>
					<?php wp_nonce_field('tinvwl_wishlist_owner', 'wishlist_nonce'); ?>
				</td>
			</tr>
			</tfoot>
	</form>
	<?php do_action('tinvwl_after_wishlist', $wishlist); ?>
	<div class="tinv-lists-nav tinv-wishlist-clear">
		<?php do_action('tinvwl_pagenation_wishlist', $wishlist); ?>
	</div>
</div>
