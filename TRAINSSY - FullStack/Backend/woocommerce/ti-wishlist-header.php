<?php
	/**
	 * The Template for displaying header for wishlist.
	 *
	 * @version             1.21.5
	 * @package           TInvWishlist\Template
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}
?>

<div class="account-favorites__summary">
	<div class="info-content">
		<h5 class="info-content__title">Товаров в избранном:</h5>
		<div class="info-content__num-wrapper">
			<p class="info-content__num">
				<?php wp_enqueue_script( 'tinvwl' ); ?>
				<a href="<?php echo esc_url( tinv_url_wishlist_default() ); ?>" class="wishlist_products_counter">
					<?php
						$wlp = new TInvWL_Product($wishlist);
						$products = $wlp->get_wishlist();
						if (empty($products)) {
							echo '0';
						} else {
							echo '<span class="wishlist_products_counter_number"></span>';
						}
					?>
				</a>
			</p>
		</div>
	</div>
	<p class="notification">Настоятельно рекомендуем не затягивать с покупкой товаров в избранном, ибо добавление товаров в эту категорию создано лишь для Вашего удобства, но не является бронью.</p>
</div>
<hr>