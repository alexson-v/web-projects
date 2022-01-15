<?php
    /**
     * Часть шаблона: Форма регистрации
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<form method="post" class="woocommerce-form woocommerce-form-register register registration-form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
    <h3 class="registration-form__title">Регистрация нового аккаунта</h3>

    <p class="form-row validate-required">
        <span class="woocommerce-input-wrapper">
            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text registration-form__input" name="email" id="reg_email" autocomplete="email" placeholder="Ваш E-mail" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
        </span>
    </p>
    
    <?php
        /**
         * Hook: trainssy_custom_reg_fields
         * 
         * @hooked trainssy_print_user_frontend_fields - 10
         * @hooked trainssy_fields_wrapper_1_start - 15
         * @hooked trainssy_first_and_last_name_fields - 20
         * @hooked trainssy_fields_wrapper_1_end - 25
         */
        do_action( 'trainssy_custom_reg_fields' );
    ?>

    <div class="registration-form__inputs-wrapper">
        <p class="form-row form-row-first validate-required">
            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text registration-form__input" name="password" id="reg_password" autocomplete="new-password" placeholder="Пароль" />
        </p>
        <p class="form-row form-row-first validate-required">
            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text registration-form__input" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['reg_password2'] ) ) esc_attr_e( $_POST['reg_password2'] ); ?>" placeholder="Повторите пароль"/>
        </p>
    </div>

    <label class="checkbox-label personal-data">
        <input type="checkbox" class="checkbox real input-checkbox" name="data_acception" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['data_acception'] ) ), true ); ?> id="data_acception" >
        <span class="checkbox fake"></span>
        <span class="checkbox-text">Я даю согласие на обработку своих персональных данных.<span>*</span></span>
    </label>
    <label for="mailpoet_subscribe_on_register" class="checkbox-label">
        <input type="hidden" id="mailpoet_subscribe_on_register_active" value="1" name="mailpoet[subscribe_on_register_active]">
        <input type="checkbox" class="checkbox real input-checkbox" id="mailpoet_subscribe_on_register" value="1" name="mailpoet[subscribe_on_register]">
        <span class="checkbox fake"></span>
        <span class="checkbox-text">Я хочу получать уведомления о новинках и скидках магазина на указанный E-mail адрес (можно будет в любое время отказаться от рассылки).</span>
    </label>

    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
    <button type="submit" class="btn registration-form__btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">Зарегистрироваться</button>

    <p class="offer-terms_notice">Регистрируясь, вы соглашаетесь с <a href="<?php echo get_page_link( 770 ); ?>" target="_blank">условиями публичной оферты и политики конфиденциальности</a>.</p>

</form>