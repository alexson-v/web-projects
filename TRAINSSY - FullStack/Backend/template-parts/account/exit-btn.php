<?php
    /**
     * Часть шаблона: Кнопка "Выйти из аккаунта".
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<hr>
<div class="btn-wrapper">
    <a href="<?php echo wp_logout_url( home_url() ); ?>" class="btn">Выйти из аккаунта</a>
</div>