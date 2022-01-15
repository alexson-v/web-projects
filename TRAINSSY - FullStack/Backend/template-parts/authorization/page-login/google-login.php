<?php
    /**
     * Часть шаблона: Вход с помощью аккаунта Google.
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<h5 class="bundle-block__or">или</h5>
<div class="bundle-block__google-button">
    <img class="google-button__logo" src="<?php echo bloginfo('template_url'); ?>/assets/img/google-logo.svg" alt="Google">
    <p class="google-button__title">Войти через аккаунт Google</p>
</div>