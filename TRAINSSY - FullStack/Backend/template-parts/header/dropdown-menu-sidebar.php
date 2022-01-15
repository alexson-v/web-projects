<?php
    /**
     * Часть шаблона: Сайдбар в раскрывающемся меню
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-2 col-lg-2">
    <div class="header_full_menu">
        <div class="header_nav_full">
            <?php trainssy_mega_menu(); ?>
        </div>
    </div>
</div>