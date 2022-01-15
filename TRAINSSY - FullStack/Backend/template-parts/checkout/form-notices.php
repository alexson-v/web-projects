<?php
    /**
     * Часть шаблона: Уведомления для клиента под полями ввода формы.
     * Подключено к файлу: wc-functions-checkout.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="notifications" id="notifTasks">
    <div class="notification">
        <img class="notification-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/exclamation-icon.svg" alt="!">
        <p class="notification-text">Настоятельно рекомендуем проверять введенные Вами данные!</p>
    </div>
    <div class="notification">
        <img class="notification-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/exclamation-icon.svg" alt="!">
        <p class="notification-text">Возврат/обмен товара возможен в течение 14 дней после покупки.</p>
    </div>
</div>