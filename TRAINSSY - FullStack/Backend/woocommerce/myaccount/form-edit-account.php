<?php
	/**
	 * Edit account form
	 *
	 * @package WooCommerce\Templates
	 * @version 3.5.0
	 */

	defined( 'ABSPATH' ) || exit;

	$user = wp_get_current_user();

	do_action( 'woocommerce_before_edit_account_form' );
?>

<div class="main-block__account-edit">

	<form class="account-edit__form woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

		<div class="account-initials">
			<div class="input-wrapper">
				<h6 class="input-heading validate-required">Имя (желательно на украинском):<span>*</span></h6>
				<input type="text" class="input-edit woocommerce-Input woocommerce-Input--text input-text" placeholder="Имя" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" required />
			</div>
			<div class="input-wrapper">
				<h6 class="input-heading validate-required">Фамилия (желательно на украинском):<span>*</span></h6>
				<input type="text" class="input-edit woocommerce-Input woocommerce-Input--text input-text" placeholder="Фамилия" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" required />
			</div>
			<div class="input-wrapper">
				<h6 class="input-heading">Отчество (желательно на украинском):</h6>
				<input type="text" class="input-edit woocommerce-Input woocommerce-Input--text input-text" placeholder="Отчество" name="billing_patronymic_name" id="billing_patronymic_name" autocomplete="patronymic-name" value="<?php echo esc_attr( $user->billing_patronymic_name ); ?>" />
			</div>
			<div class="clear"></div>
		</div>
		<hr>
        <div class="account-contacts">
			<div class="input-wrapper validate-required">
				<h6 class="input-heading">E-mail:<span>*</span></h6>
				<input type="email" class="input-edit woocommerce-Input woocommerce-Input--email input-text" placeholder="Ваш E-mail" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" required />
			</div>
			<div class="input-wrapper">
				<h6 class="input-heading">Номер телефона:<span>*</span></h6>
				<input type="tel" class="input-edit woocommerce-Input woocommerce-Input--email input-text" placeholder="Номер телефона" name="billing_phone" id="billing_phone" autocomplete="phone" value="<?php echo esc_attr( $user->billing_phone ); ?>" required />
			</div>
			<div class="clear"></div>
		</div>

		<?php do_action( 'woocommerce_edit_account_form' ); ?>

		<hr>
		<div class="account-password">
			<fieldset>
				<div class="input-wrapper">
					<h6 class="input-heading">Новый пароль:</h6>
					<input type="password" class="input-edit woocommerce-Input woocommerce-Input--password input-text" placeholder="Новый пароль" name="password_1" id="password_1" autocomplete="off" />
				</div>
				<div class="input-wrapper">
					<h6 class="input-heading">Подтвердите новый пароль:</h6>
					<input type="password" class="input-edit woocommerce-Input woocommerce-Input--password input-text" placeholder="Подтвердить новый пароль" name="password_2" id="password_2" autocomplete="off" />
				</div>
				<div class="input-wrapper">
					<h6 class="input-heading">Для сохранения Нового пароля введите <u>Текущий пароль</u>:</h6>
					<input type="password" class="input-edit woocommerce-Input woocommerce-Input--password input-text" placeholder="Текущий пароль" name="password_current" id="password_current" autocomplete="off" />
				</div>
			</fieldset>
			<div class="clear"></div>
		</div>
		<hr>
		<div class="account-confirmation">
			<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
			<button type="submit" class="btn woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>">Сохранить изменения</button>
			<input type="hidden" name="action" value="save_account_details" />
		</div>

		<?php do_action( 'woocommerce_edit_account_form_end' ); ?>

	</form>

</div>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>