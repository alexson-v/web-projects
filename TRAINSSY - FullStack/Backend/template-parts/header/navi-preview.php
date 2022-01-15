<?php
    /**
     * Часть шаблона: Превью навигации в шапке
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-7 col-lg-8 nav__main-md">
    <nav class="nav__main">
        <?php trainssy_primary_menu(); ?>
        <div class="nav__main__fullopen" id="openFullMenuBtn">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown-menu-black.svg" alt="...">
        </div>
    </nav>
    
</div>
