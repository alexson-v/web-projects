<?php
    /**
     * Часть шаблона: Всплывающее окно восстановления пароля.
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div id="popup_password-recovery" class="popup_password-recovery">
    <div class="password-recovery_popup__body">
        <div class="password-recovery_popup__content">
            <div class="recovery-header">
                <img class="recovery-header__image" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/key-icon.svg" alt="Ключ">
                <h3 class="recovery-header__title">Восстановить пароль</h3>
                <img class="recovery-header__close-popup" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" alt="X">
            </div>
            <p class="recovery-info">Введите привязанный к аккаунту адрес электронной почты. Мы отправим на него инструкции по восстановлению пароля.</p>
            <form method="post" class="woocommerce-ResetPassword lost_reset_password recovery-form">
                <input class="woocommerce-Input woocommerce-Input--text input-text authorization-form__input recovery-form__input" type="text" name="user_login" id="user_login" placeholder="Ваш E-mail">
                <div class="clear"></div>
                <input type="hidden" name="wc_reset_password" value="true" />
                <button type="submit" class="woocommerce-Button button btn recovery-form__button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>">Отправить</button>
                <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
            </form>
        </div>
    </div>
</div>