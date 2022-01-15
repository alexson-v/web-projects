<?php
	/**
	 * Output a single payment method
	 *
	 * @package     WooCommerce\Templates
	 * @version     3.5.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<label class="checkbox-label <?php echo esc_attr( $gateway->id ); ?>">
	<input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>" name="payment_method" class="checkbox real" type="radio" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
	<span class="checkbox fake"></span>
	<span class="checkbox-text">
		<?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
	</span>
</label>