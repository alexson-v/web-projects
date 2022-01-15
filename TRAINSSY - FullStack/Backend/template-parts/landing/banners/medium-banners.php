<?php
    /**
     * Часть шаблона: Средние баннеры на Главной странице.
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $banners_med = carbon_get_post_meta( get_the_ID(), 'tr_main_medium_banners' );
?>

<?php if ( $banners_med ) : ?>

<section class="medium-banners">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 loop">
                <?php
                    foreach ( $banners_med as $banner_med ) :
                        $banner_img_id = $banner_med[ 'tr_medium_banner_img' ];
                        $banner_img = wp_get_attachment_image_url( $banner_img_id, 'full' );
                ?>
                <a href="<?php echo esc_html( $banner_med[ 'tr_medium_banner_link' ] ); ?>" class="medium-banner">
                    <img src="<?php echo $banner_img; ?>" alt="Средний баннер">
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>