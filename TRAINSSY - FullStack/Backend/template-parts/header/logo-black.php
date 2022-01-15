<?php
    /**
     * Часть шаблона: Чёрный логотип
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-2 col-lg-2 col-md-4 col-sm-5 col-10">
    <div class="header-main__logo">
        <?php
            $logo_black_id = carbon_get_theme_option('tr_header_logo');
            $logo_black = $logo_black_id ? wp_get_attachment_image_src($logo_black_id, 'full') : '';
            $logo_caption = carbon_get_theme_option('tr_logo_caption');
        ?>
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo $logo_black[0]; ?>" width="<?php echo $logo_black[1]; ?>" height="<?php echo $logo_black[2]; ?>" alt="TRAINSSY">
        </a>
        <div class="caption"><?php echo $logo_caption; ?></div>
    </div>
</div>