<?php
    /**
     * Часть шаблона: Форма авторизации
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<h3 class="bundle-block__title">Авторизация</h3>
<form class="authorization-form woocommerce-form woocommerce-form-login login" method="post">

    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text authorization-form__input" placeholder="Ваш E-mail" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    <input class="woocommerce-Input woocommerce-Input--text input-text authorization-form__input" placeholder="Пароль" type="password" name="password" id="password" autocomplete="current-password" />
    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
    <button type="submit" class="woocommerce-form-login__submit btn authorization__btn" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">Войти в учётную запись</button>

    <div class="authorization-form__remember">
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme checkbox-label">
            <input class="woocommerce-form__input woocommerce-form__input-checkbox checkbox real" name="rememberme" type="checkbox" id="rememberme" value="forever" />
            <span class="checkbox fake"></span>
            <span class="checkbox-text"><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
        </label>
        <a class="authorization-recovery popup_password-recovery-link" href="#popup_password-recovery">Забыли пароль?</a>
    </div>

</form>