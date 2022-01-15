<?php
    /**
     *  Страница 404. 
     *  Функции по выводу контента страницы.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    // Подключение начала обертки главной секции страницы
    add_action( 'trainssy_404_page_main_section', 'trainssy_main_section_wrapper_start', 5 );
    function trainssy_main_section_wrapper_start() {
        ?>
        <section class="main-section__error404">
            <div class="container">
                <div class="row">
        <?php
    }

    // Подключение блока с оповещением и предложением перейти на Главную страницу
    add_action( 'trainssy_404_page_main_section', 'trainssy_main_section_notification', 10 );
    function trainssy_main_section_notification() {
        get_template_part( 'template-parts/404-page/notification' );
    }

    // Подключение блока с декоративным изображением
    add_action( 'trainssy_404_page_main_section', 'trainssy_main_section_image', 15 );
    function trainssy_main_section_image() {
        get_template_part( 'template-parts/404-page/image' );
    }

    // Подключение конца обертки главной секции страницы
    add_action( 'trainssy_404_page_main_section', 'trainssy_main_section_wrapper_end', 20 );
    function trainssy_main_section_wrapper_end() {
        ?>
        		</div>
            </div>
        </section>
        <?php
    }

    // Подключение начала обертки секции дополнительных товаров
    add_action( 'trainssy_404_page_additional_products', 'trainssy_additional_products_wrapper_start', 5 );
    function trainssy_additional_products_wrapper_start() {
        ?>
        <section class="additional-goods">
	        <div class="container">
        <?php
    }

    // Подключение заголовка секции дополнительных товаров
    add_action( 'trainssy_404_page_additional_products', 'trainssy_additional_products_title', 10 );
    function trainssy_additional_products_title() {
        get_template_part( 'template-parts/404-page/add-products-title' );
    }

    // Подключение контента секции дополнительных товаров (десктоп)
    add_action( 'trainssy_404_page_additional_products', 'trainssy_additional_products_content_desktop', 15 );
    function trainssy_additional_products_content_desktop() {
        get_template_part( 'template-parts/404-page/add-products-content-desktop' );
    }

    // Подключение контента секции дополнительных товаров (мобильная версия)
    add_action( 'trainssy_404_page_additional_products', 'trainssy_additional_products_content_mobile', 20 );
    function trainssy_additional_products_content_mobile() {
        get_template_part( 'template-parts/404-page/add-products-content-mobile' );
    }

    // Подключение конца обертки секции дополнительных товаров
    add_action( 'trainssy_404_page_additional_products', 'trainssy_additional_products_wrapper_end', 25 );
    function trainssy_additional_products_wrapper_end() {
        ?>		
            </div>
        </section>
        <?php
    }