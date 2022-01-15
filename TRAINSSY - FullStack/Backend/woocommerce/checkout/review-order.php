<?php
	/**
	 * Review order table
	 *
	 * @package WooCommerce\Templates
	 * @version 5.2.0
	 */

	defined( 'ABSPATH' ) || exit;

	/**
	 * Hook: woocommerce_review_order_before_order_total
	 * 
	 */
	do_action( 'woocommerce_review_order_before_order_total' );
?>

<div class="total-price woocommerce-checkout-review-order-table active" id="order_review">
	<div class="heading">
		<img class="heading-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/wallet-icon.svg" alt="icon">
		<h3 class="heading-title">Итого к оплате</h3>
	</div>
	<div class="content-wrapper">
		<div class="info-row cart-subtotal">
			<p class="info-row__heading">Оплата за товар</p>
			<span><?php wc_cart_totals_subtotal_html(); ?>.</span>
		</div>
		<hr class="total-price__line">
		<div class="info-row">
			<p class="info-row__heading">Скидка</p>
			<span class="cart-discount">
				<?php
					if ( empty( WC()->cart->applied_coupons ) ) {
						echo '0,00 грн.';
					} else {
						foreach ( WC()->cart->get_coupons() as $code => $coupon ) {
							wc_cart_totals_coupon_html( $coupon );
						}
					}
				?>
			</span>
		</div>
		
		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
					<tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
		<hr class="total-price__line">
		<div class="info-row order-total woocommerce-shipping-totals shipping woocommerce-shipping-methods">
			<p class="info-row__heading">Доставка</p>
			<span class="woocommerce-Price-amount amount" id="wcus-shipping-cost">0,00 грн</span><i>.</i>
		</div>
		<hr class="total-price__line">
		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>
		<div class="info-row">
			<p class="info-row__heading">Вместе к оплате</p>
			<span class="total order-total" id="wcus-order-total"><?php wc_cart_totals_order_total_html(); ?></span>
		</div>
		<?php
		do_action( 'woocommerce_review_order_after_order_total' );

			if ( ! is_ajax() ) {
				do_action( 'woocommerce_review_order_before_payment' );
			}

			global $order_button_text;
		?>
		<noscript>
			<?php
			/* translators: $1 and $2 opening and closing emphasis tags respectively */
			printf( esc_html__( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ), '<em>', '</em>' );
			?>
			<br/><button type="submit" class="btn" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>">Обновить</button>
		</noscript>

		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>

		<button type="submit" class="btn finish" name="woocommerce_checkout_place_order" id="place_order">Подтвердить заказ</button>

		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

		<?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
		<?php
			if ( ! is_ajax() ) {
				do_action( 'woocommerce_review_order_after_payment' );
			}
		?>
		<p class="offer-terms_notice">Подтверждая заказ, вы соглашаетесь с <a href="<?php echo get_page_link( 770 ); ?>" target="_blank">условиями публичной оферты и политики конфиденциальности</a>.</p>
	</div>
</div>

<?php
	/**
	 * Hook: woocommerce_review_order_after_order_total
	 * 
	 */
	do_action( 'woocommerce_review_order_after_order_total' );
?>