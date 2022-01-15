<?php
    /**
     * Часть шаблона: Информация о самовывозе
     * Подключено к файлу: custom-footer.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="footer_pickup">
    <p class="title">Самовывоз:</p>
    <p class="footer_schedule"><?php echo carbon_get_theme_option('tr_pickup'); ?></p>
</div>