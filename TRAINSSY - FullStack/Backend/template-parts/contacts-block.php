<?php
    /**
     * Часть шаблона: Блок с контактами магазина.
     * 
     * Подключено к файлу: trainssy-help-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="contacts-block">
    <h3 class="contacts-block__title">Нужна помощь?</h3>
    <div class="contacts-block__contacts">
        <div class="contacts-block__elements-wrapper">
            <img class="contacts-block__icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/phone-icon.svg" alt="Иконка телефона">
            <a href="tel:<?php echo carbon_get_theme_option( 'tr_phonenumber_link' ); ?>" class="contacts-block__text"><?php echo carbon_get_theme_option( 'tr_phonenumber' ); ?></a>
        </div>
        <div class="contacts-block__elements-wrapper">
            <img class="contacts-block__icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/email-icon.svg" alt="Иконка почты">
            <a href="mailto:<?php echo carbon_get_theme_option( 'tr_email' ); ?>" class="contacts-block__text"><?php echo carbon_get_theme_option( 'tr_email' ); ?></a>
        </div>
    </div>
</div>