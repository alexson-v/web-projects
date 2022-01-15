<?php
    /**
     *  Страница архива (каталог).
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    
    // Подключение сайдбара от WooCommerce
    add_action( 'woocommerce_sidebar', 'trainssy_archive_sidebar', 10 );
    function trainssy_archive_sidebar() {
        if ( is_archive() ) {
            woocommerce_get_sidebar();
        }
    }

    // Подключение секции с рекламным баннером
    add_action( 'trainssy_archive_before_main_content', 'trainssy_advert_banner_section', 5 );
    function trainssy_advert_banner_section() {
        get_template_part( 'template-parts/archive/advert-banner' );
    }

    // Перенос стандартных функций WC в хук trainssy_archive_before_main_content
    add_filter( 'trainssy_archive_before_main_content', 'woocommerce_output_content_wrapper', 10 );

    // Подключение кастомных оберток главного контента
    add_action( 'trainssy_archive_before_main_content', 'trainssy_inside_wrapper_start', 15 );
    function trainssy_inside_wrapper_start() {
        ?>
        <div class="container">
            <div class="row">
        <?php
    }
    add_action( 'trainssy_archive_after_main_content', 'trainssy_inside_wrapper_end', 5 );
    function trainssy_inside_wrapper_end() {
        ?>
            </div>
        </div>
        <?php
    }

    // Подключение обёртки wc-сайдбара
    add_action( 'woocommerce_sidebar', 'trainssy_sidebar_wrapper_start', 5 );
    function trainssy_sidebar_wrapper_start() {
        ?>
        <div class="col-xl-3 col-lg-4 navbar_catalogue__unactive">
        <?php
    }
    add_action( 'woocommerce_sidebar', 'trainssy_sidebar_wrapper_end', 15 );
    function trainssy_sidebar_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение обёртки главной области страницы
    add_action( 'woocommerce_archive_description', 'trainssy_archive_main_area_start', 5 );
    function trainssy_archive_main_area_start() {
        ?>
        <div class="col-xl-9 col-lg-8 col-md-12">
        <?php
    }
    add_action( 'trainssy_archive_after_main_content', 'trainssy_archive_main_area_end', 4 );
    function trainssy_archive_main_area_end() {
        ?>
        </div>
        <?php
    }

    // Отключение описания страницы от WooCommerce
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );

    // Подключение Кнопки вызова поиска (мобильная версия)
    add_action( 'woocommerce_archive_description', 'trainnsy_search_btn_mobile', 6 );
    function trainnsy_search_btn_mobile() {
        get_template_part( 'template-parts/archive/search-btn-mobile' );
    }

    // Подключение обертки настроек поиска по Каталогу
    add_action( 'woocommerce_before_shop_loop', 'trainssy_userbar_wrapper_start', 5 );
    function trainssy_userbar_wrapper_start() {
        ?>
        <div class="catalogue_userbar d-flex">
        <?php
    }
    add_action( 'woocommerce_before_shop_loop', 'trainssy_userbar_wrapper_end', 50 );
    function trainssy_userbar_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение обертки левой стороны userbar'a
    add_action( 'woocommerce_before_shop_loop', 'trainssy_left_userbar_inside_wrapper_start', 10 );
    function trainssy_left_userbar_inside_wrapper_start() {
        ?>
        <div class="userbar_block_left-wrapper">
        <?php
    }
    add_action( 'woocommerce_before_shop_loop', 'trainssy_left_userbar_inside_wrapper_end', 25 );
    function trainssy_left_userbar_inside_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение кастомных хлебных крошек
    add_action( 'woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 15 );
    add_filter( 'woocommerce_breadcrumb_defaults', 'wc_change_breadcrumb_delimiter' );
    function wc_change_breadcrumb_delimiter( $defaults ) {
        $defaults['wrap_before'] = '<nav class="search-history woocommerce-breadcrumb" itemprop="breadcrumb">';
        $defaults['wrap_after']  = '</nav>';
        $defaults['delimiter'] = ' <i class="search-arrow"></i> ';
        return $defaults;
    }
    
    // Отключение всплываюших уведомлений в архиве
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

    // Подключение обертки заголовка категории товаров + кнопки вызова фильтров для мобильной версии
    add_action( 'woocommerce_before_shop_loop', 'trainssy_filter_mobile_wrapper', 19 );
    function trainssy_filter_mobile_wrapper() {
        ?>
        <div class="filter_open-wrapper__small d-flex">
        <?php
    }
    add_action( 'woocommerce_before_shop_loop', 'trainssy_filter_mobile_wrapper_end', 22 );
    function trainssy_filter_mobile_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение заголовка категории товаров
    add_action( 'woocommerce_before_shop_loop', 'trainssy_category_title', 17 );
    function trainssy_category_title() {
        get_template_part( 'template-parts/archive/category-title' );
    }

    // Подключение кнопки вызова фильтра товаров (мобильная версия)
    add_action( 'woocommerce_before_shop_loop', 'trainssy_filter_btn_mobile', 21 );
    function trainssy_filter_btn_mobile() {
        get_template_part( 'template-parts/archive/filter-btn-mobile' );
    }
    
    // Отключение стандартных фильтров WooCommerce
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

    // Подключение обертки левой стороны userbar'a
    add_action( 'woocommerce_before_shop_loop', 'trainssy_right_userbar_inside_wrapper_start', 30 );
    function trainssy_right_userbar_inside_wrapper_start() {
        ?>
        <div class="userbar_block_right-wrapper ml-auto">
        <?php
    }
    add_action( 'woocommerce_before_shop_loop', 'trainssy_right_userbar_inside_wrapper_end', 45 );
    function trainssy_right_userbar_inside_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение Кнопки вызова поиска (десктопная версия)
    add_action( 'woocommerce_before_shop_loop', 'trainnsy_search_btn_desktop', 35 );
    function trainnsy_search_btn_desktop() {
        get_template_part( 'template-parts/archive/search-btn-desktop' );
    }

    // Подключение кнопок вызова фильтров товаров (десктопная версия)
    add_action( 'woocommerce_before_shop_loop', 'trainssy_filter_btn_desktop', 40 );
    function trainssy_filter_btn_desktop() {
        get_template_part( 'template-parts/archive/filter-btn-desktop' );
    }

    // Подключение выпадающих окон с фильтрами товаров (десктопная версия)
    add_action( 'woocommerce_before_shop_loop', 'trainssy_filter_dropdowns_desktop', 47 );
    function trainssy_filter_dropdowns_desktop() {
        get_template_part( 'template-parts/archive/filter-dropdowns-desktop' );
    }

    // Подключение разделяющей линии userbar'a и выводимых товаров
    add_action( 'woocommerce_before_shop_loop', 'trainssy_userbar_line', 60 );
    function trainssy_userbar_line() {
        ?>
        <hr class="category_userbar-line">
        <?php
    }

    // Изменение количества выводомых карточек товара
    add_filter( 'loop_shop_per_page', function ( $cols ) {
        return 15;
    }, 20 );

    // Переподключение конца стандартной обертки главного контента от WC
    add_action( 'trainssy_archive_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

    // Подключение pop-up фильтров товаров (мобильная версия)
	add_action( 'wp_footer', 'trainssy_popup_filter_mobile', 10 );
	function trainssy_popup_filter_mobile() {
		get_template_part( 'template-parts/pop-ups/popup-filter-mobile' );
	}
?>