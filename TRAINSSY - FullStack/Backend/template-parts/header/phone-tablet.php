<?php
    /**
     * Часть шаблона: Номер телефона (разрешение <768)
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-md-4 col-sm-5 col-12 header-main__phonenumber-md">
    <div class="header-main__phonenumber">
        <a href="tel:<?php echo carbon_get_theme_option('tr_phonenumber_link'); ?>" class="header-main__phone"><?php echo carbon_get_theme_option('tr_phonenumber'); ?></a>
        <div class="header-main__phone-caption">Доставка по всей Украине!</div>
    </div>
</div>