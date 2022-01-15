<?php
    /**
     * Часть шаблона: Кнопка-hamburger (кнопка вызова мобильного меню)
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-md-1 offset-md-1 col-sm-2 offset-sm-2 col-2 offset-0 hamburger-menu">
    <div class="header-main__hamburger-menu" data-mobile_menu="1">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/hamburger-menu.svg" alt="Открыть меню">
    </div>
</div>