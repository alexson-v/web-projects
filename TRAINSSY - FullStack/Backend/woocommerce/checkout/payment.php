<?php
	/**
	 * Checkout Payment Section
	 *
	 * @package WooCommerce\Templates
	 * @version 3.5.3
	 */

	defined( 'ABSPATH' ) || exit;
?>

<div class="gradual-form__task" data-checkout="3">
    <div class="heading">
        <div class="progress-level active">3</div>
        <h3 class="title">Оплата</h3>
    </div>
    <div class="form__task-3" id="payment">
        <?php if ( WC()->cart->needs_payment() ) : ?>
			<?php
			if ( ! empty( $available_gateways ) ) {
				foreach ( $available_gateways as $gateway ) {
					wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
				}
			} else {
				echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
			}
			?>
        <?php endif; ?>
        <a class="btn payment">Дальше</a>
    </div>
</div>