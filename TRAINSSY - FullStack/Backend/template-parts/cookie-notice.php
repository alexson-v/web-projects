<?php
    /**
     * Часть шаблона: Плашка с уведомлением об использовании cookies
     * Подключено к файлу: custom-footer.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<?php if (empty($_COOKIE['messages_cookies'])): ?>

<div class="cookies-notice">
    <img class="icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/cookies-icon.svg" alt="Печенька">
    <p>Мы используем <strong>cookie-файлы</strong>, чтобы получить статистику, которая помогает нам улучшить сервис для Вас с целью персонализации сервисов и предложений. Вы можете прочитать подробнее о cookie-файлах или изменить настройки браузера. Продолжая пользоваться сайтом без изменения настроек, вы даёте согласие на использование ваших cookie-файлов.</p>
    <img class="close-button" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-button-white.svg" alt="X">
</div>

<?php endif; ?>