<?php
    /**
     * Часть шаблона: Блок с оповещением и предложением перейти на Главную страницу.
     * Подключено к файлу: trainssy-404-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-6 col-lg-7 col-md-12">
    <div class="main-alert">
        <div class="title-wrapper">
            <h2 class="title">Соединение было утеряно</h2>
            <hr class="title-underline">
        </div>
        <img class="image-404_small" src="<?php echo bloginfo('template_url'); ?>/assets/img/404-image.webp" alt="Изображение">
        <ul class="list">
            <li>Страница, которую вы запрашивали, не обнаружена.</li>
            <li>Ничего страшного, так бывает. Перейдите на главную страницу.</li>
        </ul>
        <a href="<?php echo get_home_url(); ?>" class="btn">Главная страница</a>
    </div>
</div>