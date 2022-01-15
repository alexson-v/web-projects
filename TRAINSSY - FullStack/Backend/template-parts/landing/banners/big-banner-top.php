<?php
    /**
     * Часть шаблона: Большой верхний баннер на Главной странице.
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<section class="big-top-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <a href="<?php echo carbon_get_post_meta( get_the_ID(), 'tr_main_big_banner_top_link' ); ?>" class="big-banner">
                    <?php
                        $big_top_banner_id = carbon_get_post_meta( get_the_ID(), 'tr_main_big_banner_top_img' );
                        $big_top_banner = wp_get_attachment_image_url( $big_top_banner_id, 'full' );
                    ?>
                    <div style="background-image: url('<?php echo $big_top_banner; ?>');"></div>
                </a>
            </div>
        </div>
    </div>
</section>