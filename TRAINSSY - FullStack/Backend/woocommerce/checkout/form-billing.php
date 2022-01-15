<?php
	/**
	 * Checkout billing information form
	 *
	 * @package WooCommerce\Templates
	 * @version 3.6.0
	 * @global WC_Checkout $checkout
	 */

	defined( 'ABSPATH' ) || exit;

	$user = wp_get_current_user();

	
?>

<div class="gradual-form__task active" data-checkout="1">
	<div class="heading">
		<div class="progress-level active">1</div>
		<h3 class="title">Ваши контактные данные</h3>
	</div>
	<div class="form__task-1">
		<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
			
		<input type="text" class="input-task-1" name="billing_last_name" id="billing_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" placeholder="Ваша фамилия">
		<div class="registration-form__inputs-wrapper">
			<input type="text" class="input-task-1" name="billing_first_name" id="billing_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" placeholder="Имя">
			<input type="text" class="input-task-1" name="billing_middle_name" id="billing_middle_name" value="<?php echo esc_attr( $user->billing_patronymic_name ); ?>" placeholder="Отчество">
		</div>
		<input type="tel" class="input-task-1" name="billing_phone" id="billing_phone" placeholder="Номер телефона" value="<?php echo esc_attr( $user->billing_phone ); ?>" autocomplete="tel">
		<input type="email" class="input-task-1" name="billing_email" id="billing_email" placeholder="E-mail" value="<?php echo esc_attr( $user->user_email ); ?>" autocomplete="email">
		

		<a class="btn checkout-btn" data-checkout="2">Дальше</a>
	</div>
</div>