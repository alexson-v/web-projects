<?php
    /**
     * Часть шаблона: Блок с декоративным изображением.
     * Подключено к файлу: trainssy-404-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-6 col-lg-5">
    <div class="image-alert">
        <div class="heading">
            <h2 class="title">404</h2>
            <h5 class="undertitle">Извините, страница не найдена</h5>
        </div>
        <img class="image-404_big" src="<?php echo bloginfo('template_url'); ?>/assets/img/404-image.webp" alt="Изображение">
    </div>
</div>