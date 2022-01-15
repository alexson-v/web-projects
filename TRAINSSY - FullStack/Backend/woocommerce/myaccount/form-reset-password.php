<?php
	/**
	 * Lost password reset form.
	 *
	 * @package WooCommerce\Templates
	 * @version 3.5.5
	 */

	defined( 'ABSPATH' ) || exit;

	/**
	 * Hook: woocommerce_before_reset_password_form
	 * 
	 * @hooked trainssy_ui_section_auth_wrapper_start - 5
	 * @hooked woocommerce_breadcrumb - 10
	 * @hooked trainssy_ui_section_auth_wrapper_end - 15
	 */
	do_action( 'woocommerce_before_reset_password_form' );
?>

<section class="reset-password-form">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="reset-form-wrapper">
					
					<form method="post" class="woocommerce-ResetPassword lost_reset_password">

						<h3>Введите новый пароль</h3>
						<p class="form-row validate-required">
							<span class="woocommerce-input-wrapper">
								<input type="password" class="reset-password-input woocommerce-Input woocommerce-Input--text input-text" name="password_1" id="password_1" placeholder="Новый пароль" autocomplete="new-password" />
							</span>
						</p>
						<p class="form-row validate-required">
							<span class="woocommerce-input-wrapper">
								<input type="password" class="reset-password-input woocommerce-Input woocommerce-Input--text input-text" name="password_2" id="password_2" placeholder="Повторите новый пароль" autocomplete="new-password" />
							</span>
						</p>
						
						<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
						<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />
						<div class="clear"></div>

						<?php do_action( 'woocommerce_resetpassword_form' ); ?>

							<input type="hidden" name="wc_reset_password" value="true" />
							<button type="submit" class="btn woocommerce-Button button" value="<?php esc_attr_e( 'Save', 'woocommerce' ); ?>"><?php esc_html_e( 'Save', 'woocommerce' ); ?></button>

						<?php wp_nonce_field( 'reset_password', 'woocommerce-reset-password-nonce' ); ?>

					</form>
					<?php do_action( 'woocommerce_after_reset_password_form' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>