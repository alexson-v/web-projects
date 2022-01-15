<?php
    /**
     *  Главная страница магазина.
     *  Функции по выводу контента страницы.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Подключение начала обертки секции оффера
    add_action( 'trainssy_landing_offer_slider', 'trainssy_slider_offer_section_wrapper_start', 5 );
    function trainssy_slider_offer_section_wrapper_start() {
        ?>
        <section class="offer">   
            <div class="container-fluid">
        <?php
    }

    // Подключение офферного слайдера
    add_action( 'trainssy_landing_offer_slider', 'trainssy_slider_offer', 10 );
    function trainssy_slider_offer() {
        get_template_part( 'template-parts/landing/slider-offer' );
    }

    // Подключение конца обертки секции оффера
    add_action( 'trainssy_landing_offer_slider', 'trainssy_slider_offer_section_wrapper_end', 15 );
    function trainssy_slider_offer_section_wrapper_end() {
        ?>
            </div>
        </section>
        <?php
    }

    // Подключение секции со средними баннерами
    add_action( 'trainssy_landing_top_banners', 'trainssy_medium_banners_section', 5 );
    function trainssy_medium_banners_section() {
        get_template_part( 'template-parts/landing/banners/medium-banners' );
    }

    // Подключение секции с верхним большим баннером
    add_action( 'trainssy_landing_top_banners', 'trainssy_big_top_banner_section', 10 );
    function trainssy_big_top_banner_section() {
        get_template_part( 'template-parts/landing/banners/big-banner-top' );
    }

    // Подключение начала обертки секции со слайдером новых товаров
    add_action( 'trainssy_landing_new_products', 'trainssy_new_products_section_start', 5 );
    function trainssy_new_products_section_start() {
        ?>
        <section class="new-products">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Подключение swiper-слайдера с карточками новых товаров
    add_action( 'trainssy_landing_new_products', 'trainssy_new_products_slider', 10 );
    function trainssy_new_products_slider() {
        get_template_part( 'template-parts/landing/slider-new-products' );
    }


    add_action( 'trainssy_landing_new_products', 'trainssy_new_products_section_end', 15 );
    function trainssy_new_products_section_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение секции с нижним большим баннером
    add_action( 'trainssy_landing_bottom_banners', 'trainssy_big_bottom_banner_section', 5 );
    function trainssy_big_bottom_banner_section() {
        get_template_part( 'template-parts/landing/banners/big-banner-bottom' );
    }

    // Подключение секции с нижними малыми баннерами
    add_action( 'trainssy_landing_bottom_banners', 'trainssy_small_banners_section', 10 );
    function trainssy_small_banners_section() {
        get_template_part( 'template-parts/landing/banners/small-banners' );
    }
    

    // Подключение начала обертки секции c описанием магазина
    add_action( 'trainssy_landing_descr', 'trainssy_descr_section_wrapper_start', 5 );
    function trainssy_descr_section_wrapper_start() {
        ?>
        <section class="descr-section">
            <div class="container">
                <div class="form_wrapper">
        <?php
    }

    // Подключение формы заполнения заявки на товар в секции с формой
    add_action( 'trainssy_landing_descr', 'trainssy_descr_section_text', 10 );
    function trainssy_descr_section_text() {
        get_template_part( 'template-parts/landing/descr' );
    }

    // Подключение конца обертки секции c описанием магазина
    add_action( 'trainssy_landing_descr', 'trainssy_descr_section_wrapper_end', 15 );
    function trainssy_descr_section_wrapper_end() {
        ?>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала обертки секции c логотипами брендов
    add_action( 'trainssy_landing_brands', 'trainssy_brands_section_wrapper_start', 5 );
    function trainssy_brands_section_wrapper_start() {
        ?>
        <section class="brands">
            <div class="container">
                <div class="row">
        <?php
    }

    // Подключение логотипов брендов
    add_action( 'trainssy_landing_brands', 'trainssy_brands_section_logos', 10 );
    function trainssy_brands_section_logos() {
        get_template_part( 'template-parts/landing/brand-logos' );
    }

    // Подключение конца обертки секции c логотипами брендов
    add_action( 'trainssy_landing_brands', 'trainssy_brands_section_wrapper_end', 15 );
    function trainssy_brands_section_wrapper_end() {
        ?>
                </div>
            </div>
        </section>
        <?php
    }