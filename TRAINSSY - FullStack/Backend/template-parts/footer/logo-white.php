<?php
    /**
     * Часть шаблона: Белый логотип
     * Подключено к файлу: custom-footer.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="footer_logo">
    <?php
        $logo_white_id = carbon_get_theme_option('tr_footer_logo');
        $logo_white = $logo_white_id ? wp_get_attachment_image_src($logo_white_id, 'full') : '';
        $logo_caption = carbon_get_theme_option('tr_logo_caption');
    ?>
    <a href="<?php echo get_home_url(); ?>">
        <img class="header_logo_image" src="<?php echo $logo_white[0]; ?>" width="<?php echo $logo_white[1]; ?>" height="<?php echo $logo_white[2]; ?>" alt="TRAINSSY">
    </a>
    <p class="footer_logo_text"><?php echo carbon_get_theme_option('tr_logo_caption'); ?></p>
</div>