<?php
    /**
     * Часть шаблона: Кнопка "Добавить в избранное"
     * Подключено к файлу: variable.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<?php echo do_shortcode('[ti_wishlists_addtowishlist loop=yes]'); ?>