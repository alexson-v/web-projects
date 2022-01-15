<?php
    /**
     * Часть шаблона: Swiper-slider в офферной конструкции.
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $sliders = carbon_get_post_meta( get_the_ID(), 'tr_main_offer_slider' );
?>

<div class="swiper-container slider-offer-text">
    <div class="swiper-wrapper">
        <?php foreach ( $sliders as $slider ) : ?>
        <div class="swiper-slide slider-offer-text__slide">
            <div class="slider-offer-text__content">
                <h2><?php echo esc_html( $slider[ 'tr_before_title_offer' ] ); ?></h2>
                <h1><?php echo esc_html( $slider[ 'tr_title_offer' ] ); ?></h1>
                <h3>
                    <?php echo esc_html( $slider[ 'tr_after_title_offer' ] ); ?>
                    <span class="offer-text__slide-highlighter"><?php echo esc_html( $slider[ 'tr_highlight_after_title_offer' ] ); ?></span>
                </h3>
                <a href="<?php echo esc_html( $slider[ 'tr_btn_link_offer' ] ); ?>" class="btn"><?php echo esc_html( $slider[ 'tr_btn_text_offer' ] ); ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="swiper-container slider-offer-img">
    <div class="swiper-wrapper">
        <?php
            foreach ( $sliders as $slider ) :
                $offer_image_id = $slider[ 'tr_background_image_offer' ];
                $offer_image = wp_get_attachment_image_url( $offer_image_id, 'full' );
        ?>
        <div class="swiper-slide slider-offer-img__slide">
            <div class="slider-offer-img__bg" data-swiper-parallax="10%" style="background-image: url('<?php echo $offer_image; ?>');"></div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination slider-offer-img__pagination"></div>
</div>