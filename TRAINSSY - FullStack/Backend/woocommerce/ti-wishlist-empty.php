<?php
	/**
	 * The Template for displaying empty wishlist.
	 *
	 * @version             1.25.5
	 * @package           TInvWishlist\Template
	 */

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly.
	}
?>

<div class="tinv-wishlist woocommerce">
	<?php do_action('tinvwl_before_wishlist', $wishlist); ?>
	<?php if (function_exists('wc_print_notices') && isset(WC()->session)) {
		wc_print_notices();
	} ?>
	
	<div class="account-favorites__none">
		<div class="account-favorites__none-text">
			<p class="account-favorites__none-text__first">В ваших избранных пока пусто.</p>
			<p class="account-favorites__none-text__second">Чтобы добавить товар в избранные, перейдите на страницу интересующего вас товара и нажмите на сердечко.</p>
		</div>
	</div>

	<?php do_action('tinvwl_wishlist_is_empty'); ?>

</div>