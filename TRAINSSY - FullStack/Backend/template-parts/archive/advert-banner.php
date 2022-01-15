<?php
    /**
     * Часть шаблона: Секция с рекламным баннером в Каталоге.
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $advert_banner = carbon_get_theme_option( 'tr_advert_banner_show' );
    if ( 'on' == $advert_banner ):
?>

<section class="advert-banner">
    <div class="container">
        <div class="row">
            <a href="<?php echo carbon_get_theme_option( 'tr_archive_advert_banner_link' ); ?>">
                <div class="col-xl-12">
                    <?php
                        $advert_banner_id = carbon_get_theme_option('tr_archive_advert_banner_img');
                        $advert_banner_img = $advert_banner_id ? wp_get_attachment_image_src($advert_banner_id, 'full') : '';
                    ?>
                    <img class="catalogue_banner" src="<?php echo $advert_banner_img[0]; ?>" width="<?php echo $advert_banner_img[1]; ?>" height="<?php echo $advert_banner_img[2]; ?>" alt="Рекламный баннер">
                </div>
            </a>
        </div>
    </div>
</section>

<?php endif; ?>