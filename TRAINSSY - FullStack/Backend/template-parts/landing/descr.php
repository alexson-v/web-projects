<?php
    /**
     * Часть шаблона: Описание магазина (про магазин)
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="row">
    <div class="col-xl-12">
        <div class="descr-wrapper">
            <div class="text-part">
                <?php echo the_content(); ?>
                <a href="<?php echo carbon_get_theme_option('tr_inst'); ?>" target="_blank" rel="noreferrer" class="btn instagram">Перейти в наш Instagram!</a>
            </div>
            <img class="side-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/descr-image.webp" alt="Красный кроссовок Nike">
        </div>
    </div>
</div>