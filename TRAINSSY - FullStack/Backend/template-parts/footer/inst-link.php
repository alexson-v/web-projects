<?php
    /**
     * Часть шаблона: Ссылка на Instagram магазина
     * Подключено к файлу: custom-footer.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<a href="<?php echo carbon_get_theme_option('tr_inst'); ?>" target="_blank" rel="noreferrer">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/inst-icon-white.svg" alt="Instagram" class="inst_icon">
</a>