<?php
	/**
	 * Checkout shipping information form
	 *
	 * @package WooCommerce\Templates
	 * @version 3.6.0
	 * @global WC_Checkout $checkout
	 */

	defined( 'ABSPATH' ) || exit;

	$user = wp_get_current_user();
?>
<div class="gradual-form__task" data-checkout="2">
	<div class="heading">
		<div class="progress-level active">2</div>
		<h3 class="title">Доставка</h3>
	</div>
	<div class="form__task-2">
		<div id="shipping_method" class="delivery_way-body woocommerce-shipping-methods">
			<h6 class="field-title">Способ доставки</h6>
			<div class="delivery_way-option">
				<label for="shipping_method_0_nova_poshta_shipping-4" class="checkbox-label">
					<input class="checkbox real shipping_method" type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_nova_poshta_shipping-4" value="nova_poshta_shipping:4" checked="checked">
					<span class="checkbox fake"></span>
					<span class="checkbox-text">Доставка в отделение “Новая Почта”</span>
					<input id="wcus-shipping-name" type="hidden" value="Нова пошта">
				</label>
				<p class="delivery-price">Стоимость доставки: выберите город</p>
			</div>
			<div class="delivery_way-option">
				<label class="checkbox-label">
					<input class="checkbox real shipping_method" type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup-2" value="local_pickup:2">
					<span class="checkbox fake"></span>
					<span class="checkbox-text">Самовывоз (г. Киев, ул. Жилянская 148)</span>
				</label>
				<p class="delivery-price">Стоимость доставки: бесплатно</p>
			</div>
			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>
		</div>
		<!-- Скрытый блок -->
		<div class="woocommerce-shipping-fields wc-dummy-fields">
			<h3 id="ship-to-different-address">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" <?php checked( apply_filters( 'woocommerce_ship_to_different_address_checked', 'shipping' === get_option( 'woocommerce_ship_to_destination' ) ? 1 : 0 ), 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" /> <span>Я получатель</span>
				</label>
			</h3>
			<div class="shipping_address">
				<div class="woocommerce-shipping-fields__field-wrapper">
					<input type="text" class="input-text" name="shipping_first_name" id="shipping_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>">
					<input type="text" class="input-text" name="shipping_last_name" id="shipping_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>">
					<input type="text" class="input-text" name="wcus_shipping_middlename" id="wcus_shipping_middlename" value="<?php echo esc_attr( $user->billing_patronymic_name ); ?>">
					<input type="tel" class="input-text" name="wcus_shipping_phone" id="wcus_shipping_phone" value="<?php echo esc_attr( $user->billing_phone ); ?>" placeholder="Номер телефона (доставка)">
					<input type="hidden" name="shipping_country" id="shipping_country" value="UA" autocomplete="country" class="country_to_state" readonly="readonly">
				</div>
			</div>
		</div>
		<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
		<div class="woocommerce-additional-fields">
			<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

			<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', 'yes' === get_option( 'woocommerce_enable_order_comments', 'yes' ) ) ) : ?>

				<?php if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) : ?>

					<h3><?php esc_html_e( 'Additional information', 'woocommerce' ); ?></h3>

				<?php endif; ?>

				<div class="woocommerce-additional-fields__field-wrapper">
					<?php foreach ( $checkout->get_checkout_fields( 'order' ) as $key => $field ) : ?>
						<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>

			<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
		</div>
		<a class="btn checkout-btn shipping" data-checkout="3">Дальше</a>
	</div>
</div>