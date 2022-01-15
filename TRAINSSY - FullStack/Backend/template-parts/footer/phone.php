<?php
    /**
     * Часть шаблона: Номер телефона в подвале
     * Подключено к файлу: custom-footer.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="footer_phonenumber">
    <a href="tel:<?php echo carbon_get_theme_option('tr_phonenumber_link'); ?>" class="footer_phone">
        <?php echo carbon_get_theme_option('tr_phonenumber'); ?>
    </a>
    <div class="footer_phone_text">Доставка по всей Украине!</div>
</div>