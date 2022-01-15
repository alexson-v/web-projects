<?php
    /**
     * Часть шаблона: Контакты клиента (E-mail и номер телефона).
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $user = wp_get_current_user();
?>

<div class="account-preview__client-contacts">
    <div class="client-contacts__wrapper">
        <img class="email-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/email-icon.svg" alt="Иконка почты">
        <p class="email-text"><?php echo esc_attr( $user->user_email ); ?></p>
    </div>
    <div class="client-contacts__wrapper">
        <img class="phone-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/phone-icon.svg" alt="Иконка телефона">
        <p class="phone-text"><?php echo esc_attr( $user->billing_phone ); ?></p>
    </div>
</div>
<hr>