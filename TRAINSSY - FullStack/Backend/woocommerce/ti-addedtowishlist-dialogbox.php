<?php
	/**
	 * The Template for displaying dialog for message added to wishlist product.
	 *
	 * @version             1.21.6
	 * @package           TInvWishlist\Template
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}
?>

<div class="tinvwl_added_to_wishlist tinv-modal tinv-modal-open">
	<div class="tinv-overlay"></div>
	<div class="tinv-table">
		<div class="tinv-cell">
			<div class="tinv-modal-inner">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" class="tinvwl_button_close" alt="Закрыть">
				<i class="<?php echo esc_attr( $icon ); ?>"></i>
				<div class="tinv-txt"><?php echo $msg; // WPCS: xss ok. ?></div>
				<div class="tinvwl-buttons-group tinv-wishlist-clear">
					<?php if ( isset( $wishlist_url ) ) : ?>
						<button class="button btn tinvwl_button_view tinvwl-btn-onclick"
								data-url="<?php echo esc_url( $wishlist_url ); ?>" type="button"><?php echo wp_kses_post( apply_filters( 'tinvwl_view_wishlist_text', tinv_get_option( 'general', 'text_browse' ) ) ); ?>
						</button>
					<?php endif; ?>
					<?php if ( isset( $dialog_custom_url ) && isset( $dialog_custom_html ) ) : ?>
						<button class="button btn tinvwl_button_view tinvwl-btn-onclick"
								data-url="<?php echo esc_url( $dialog_custom_url ); ?>"
								type="button"><?php echo $dialog_custom_html; // WPCS: xss ok. ?></button>
					<?php endif; ?>
				</div>
				<div class="tinv-wishlist-clear"></div>
			</div>
		</div>
	</div>
</div>
