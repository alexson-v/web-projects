<?php
    /**
     * Часть шаблона: Малые баннеры на Главной странице.
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $banners_small = carbon_get_post_meta( get_the_ID(), 'tr_main_small_banners' );
?>

<?php if ( $banners_small ) : ?>

<section class="small-banners">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 loop">
                <?php
                    foreach ( $banners_small as $banner_small ) :
                        $banner_img_id = $banner_small[ 'tr_small_banner_img' ];
                        $banner_img = wp_get_attachment_image_url( $banner_img_id, 'full' );
                ?>
                <a href="<?php echo esc_html( $banner_small[ 'tr_small_banner_link' ] ); ?>" class="small-banner">
                    <img src="<?php echo $banner_img; ?>" alt="Малый баннер">
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>