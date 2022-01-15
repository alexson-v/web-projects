<?php
    /**
     *  Элементы товара.
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    /**
     *  Кастомизация карточки товара.
     *  Часть шаблона: content-product.php
     */

	// Отключение флажка "Распродажа"
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

	// Отключение рейтинга
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

	// Отключение кнопки "Добавить в корзину"
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

	// Переподключение конца ссылки карточки товара
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15 );

	// Подключение начала обертки деталей карточки товара
	add_action( 'woocommerce_shop_loop_item_title', 'trainssy_product_details_wrapper_start', 5 );
	function trainssy_product_details_wrapper_start() {
		?>
		<div class="details-wrapper">
		<?php
	}

	// Подключение иконки "Добавить в избранные" от плагина "TI Wishlist"
	add_action( 'woocommerce_after_shop_loop_item_title', 'trainssy_product_add_to_wishlist', 15 );
	function trainssy_product_add_to_wishlist() {
		echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]");
	}

	// Название товара обрезается на конце 1 строки в карточке
	function trainssy_title_chars($count, $after) {
		$title = get_the_title();
		if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
		else $after = '';
		echo '<h5 class="product-name">' . $title . $after . '</h5>';
	}

	// Подмена дефолтного названия товара WooCommerce на название, превентивное вылазу с первой строки
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
	add_action( 'woocommerce_shop_loop_item_title', 'trainssy_product_card_title', 10 );
	function trainssy_product_card_title() {
		echo trainssy_title_chars(25, '...');
	}


	// Подключение конца обертки деталей карточки товара
	add_action( 'woocommerce_after_shop_loop_item_title', 'trainssy_product_details_wrapper_end', 20 );
	function trainssy_product_details_wrapper_end() {
		?>
		</div>
		<?php
	}

	/**
     *  Кастомизация Страницы товара.
     *  Часть шаблона: single-product.php
     */
	
	// Подключение начала обертки ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_content_wrapper_start', 5 );
	function trainssy_ui_elements_content_wrapper_start() {
		?>
		<section class="ui-elements__product">
            <div class="container">
		<?php
	}

	// Подключение начала ряда(1) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_1_start', 10 );
	function trainssy_ui_elements_row_1_start() {
		?>
		<div class="row">
			<div class="col-xl-12">
		<?php
	}

	// Подключение Кнопки вызова поиска (мобильная версия)
    add_action( 'trainssy_product_before_main_content', 'trainnsy_product_search_btn_mobile', 15 );
    function trainnsy_product_search_btn_mobile() {
        get_template_part( 'template-parts/archive/search-btn-mobile' );
    }

	// Подключение кастомных хлебных крошек
    add_action( 'trainssy_product_before_main_content', 'woocommerce_breadcrumb', 20 );

	// Подключение конца ряда(1) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_1_end', 25 );
	function trainssy_ui_elements_row_1_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Подключение начала ряда(2) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_2_start', 30 );
	function trainssy_ui_elements_row_2_start() {
		?>
		<div class="row">
			<div class="col-xl-12">
				<div class="ui-elements__wrapper">
		<?php
	}

	// Подключение Названия товара (Полное название + его Артикул от производителя)
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_product_name', 35 );
	function trainssy_ui_elements_product_name() {
		get_template_part( 'template-parts/product/name' );
	}

	// Подключение Кнопки вызова поиска (десктопная версия)
    add_action( 'trainssy_product_before_main_content', 'trainnsy_product_search_btn_desktop', 40 );
    function trainnsy_product_search_btn_desktop() {
        get_template_part( 'template-parts/product/search-btn-desktop' );
    }

	// Подключение конца ряда(2) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_2_end', 45 );
	function trainssy_ui_elements_row_2_end() {
		?>
				</div>
			</div>
		</div>
		<?php
	}

	// Подключение начала ряда(3) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_3_start', 50 );
	function trainssy_ui_elements_row_3_start() {
		?>
		<div class="row">
            <div class="col-xl-12 ui-elements__undertitle-wrapper">
		<?php
	}

	// Подключение внутреннего Артикула товара
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_product_code', 55 );
	function trainssy_ui_elements_product_code() {
		get_template_part( 'template-parts/product/code' );
	}

	// Подключение кнопки "Поделиться" (мобильная версия)
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_product_share_mobile', 60 );
	function trainssy_ui_elements_product_share_mobile() {
		get_template_part( 'template-parts/product/share-btn-mobile' );
	}

	// Подключение конца ряда(3) ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_row_3_end', 65 );
	function trainssy_ui_elements_row_3_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Подключение конца обертки ui-элементов
	add_action( 'trainssy_product_before_main_content', 'trainssy_ui_elements_content_wrapper_end', 70 );
	function trainssy_ui_elements_content_wrapper_end() {
		?>
			</div>
		</section>
		<?php
	}

	// Создание произвольных полей WooCommerce
	add_action( 'woocommerce_product_options_sku', 'trainssy_producer_sku' );
	function trainssy_producer_sku() {
		$arg = array(
			'id'                => 'product_producer_sku_text_field',
			'label'             => 'Артикул производителя',
			'placeholder'       => 'Например, DJ6201-100',
			'desc_tip'          => false,
		);
		woocommerce_wp_text_input( $arg );
	}

	add_action( 'woocommerce_process_product_meta',
	function ($post_id) {
		$product = wc_get_product($post_id);
		$product_producer_sku_field = isset($_POST['product_producer_sku_text_field'])? sanitize_text_field($_POST['product_producer_sku_text_field']) : '';
		$product->update_meta_data('product_producer_sku_text_field', $product_producer_sku_field);
		$product->save();
	}, 10, 1 );


    /**
     *  Кастомизация контента Страницы товара.
     *  Часть шаблона: content-single-product.php
     */

	// Отключение дефолтного названия товара от WC
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

	// Отключение меты от WC
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

	// Отключение вывода рейтинга (звезды)
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

	// Отключение плашки "Распродажа"
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

	// Отключение краткого описания товара
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

	// Отключение все функций WC от хука woocommerce_after_single_product_summary
	remove_all_actions( 'woocommerce_after_single_product_summary' );

	// Переподключение апселлов товара
	add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 5 );

	// Подключение начала обертки большой части главной секции товара
	add_action( 'woocommerce_before_single_product_summary', 'trainssy_single_product_big_wrapper_start', 5 );
	function trainssy_single_product_big_wrapper_start() {
		?>
		<div class="main-block__product__big-wrapper">
		<?php
	}

	// Подключение триггеров кастомных табов
	add_action( 'woocommerce_before_single_product_summary', 'trainssy_single_product_tab_triggers', 10 );
	function trainssy_single_product_tab_triggers() {
		get_template_part( 'template-parts/product/tab-triggers' );
	}

	// Подключение начала обертки таба "Все о товаре"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_1_wrapper_start', 5 );
	function trainssy_single_product_tab_1_wrapper_start() {
		?>
		<div class="main-block__product-common main-block__product-tab active" data-product-content="1">
			<hr class="gray-line">
			<div class="main-block__product-common__wrapper">
		<?php
	}

	// Переподключение Slick-слайдера изображений товара от WC
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 7 );

	// Подключение swiper-слайдера изображений товара в табе "Всё о товаре" (мобильная версия)
	add_action( 'woocommerce_single_product_summary', 'trainssy_gallery_common_mobile', 8 );
	function trainssy_gallery_common_mobile() {
		?>
		<div class="swiper-container slider_product-common__mobile">
			<?php
				get_template_part( 'template-parts/product/slider/swiper-slider' );
				get_template_part( 'template-parts/product/slider/slider-pagination' );
			?>
		</div>
		<?php
	}

	// Подключение обертки продающего блока
	add_action( 'woocommerce_single_product_summary', 'trainssy_selling_block_wrapper_start', 9 );
	function trainssy_selling_block_wrapper_start() {
		?>
		<div class="main-block__product-common__selling-block">
		<?php
	}
	add_action( 'woocommerce_single_product_summary', 'trainssy_selling_block_wrapper_end', 65 );
	function trainssy_selling_block_wrapper_end() {
		?>
		</div>
		<?php
	}

	// Подключение уведомления о возможности возврата (планшет)
	add_action( 'woocommerce_single_product_summary', 'trainssy_cta_announcement_tablet', 70 );
	function trainssy_cta_announcement_tablet() {
		get_template_part( 'template-parts/product/announcement-tablet' );
	}

	// Подключение конца обертки таба "Все о товаре"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_1_wrapper_end', 75 );
	function trainssy_single_product_tab_1_wrapper_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Изменение кол-ва выводимых карточек товара в "Похожие товары" (related.php)
	add_action( 'woocommerce_output_related_products_args', function() {
		$arg['posts_per_page'] = 8;
		return $arg;
	} );

	// Подключение начала обертки таба "Описание"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_2_wrapper_start', 85 );
	function trainssy_single_product_tab_2_wrapper_start() {
		?>
		<div class="main-block__product-additional main-block__product-tab" data-product-content="2">
			<div class="main-block__product-additional__two-sides">
				<div class="main-block__product-additional__left">
					<hr class="gray-line">
					<div class="main-block__product-additional__wrapper">
		<?php
	}

	// Подключение описания товара
	add_action( 'woocommerce_single_product_summary', 'trainssy_product_descr', 90 );
	function trainssy_product_descr() {
		get_template_part( 'template-parts/product/descr' );
	}

	// Подключение конца обертки таба "Описание"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_2_wrapper_end', 95 );
	function trainssy_single_product_tab_2_wrapper_end() {
		?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	// Подключение начала обертки таба "Фото"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_3_wrapper_start', 105 );
	function trainssy_single_product_tab_3_wrapper_start() {
		?>
		<div class="main-block__product-common main-block__product-tab big-gallery" data-product-content="3">
			<hr class="gray-line">
			<div class="main-block__product-common__gallery-wrapper">
		<?php
	}

	// Подключение swiper-слайдера изображений товара в табе "Фото" (десктопная версия)
	add_action( 'woocommerce_single_product_summary', 'trainssy_gallery_images_desktop', 110 );
	function trainssy_gallery_images_desktop() {
		?>
		<div class="swiper-container slider_gallery-big">
			<?php get_template_part( 'template-parts/product/slider/swiper-slider' ); ?>
		</div>
		<?php get_template_part( 'template-parts/product/slider/slider-buttons' );
	}

	// Подключение конца обертки таба "Фото"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_3_wrapper_end', 115 );
	function trainssy_single_product_tab_3_wrapper_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Подключение начала обертки таба "Оставить отзыв"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_4_wrapper_start', 125 );
	function trainssy_single_product_tab_4_wrapper_start() {
		?>
		<div class="main-block__product-additional main-block__product-tab" data-product-content="4">
			<div class="main-block__product-additional__two-sides">
				<div class="main-block__product-additional__left">
					<hr class="gray-line">
					<div class="main-block__product-additional__wrapper">		
		<?php
	}

	// Подключение вывода WooCommerce-отзывов о товаре
	add_action( 'woocommerce_single_product_summary', 'trainssy_product_testimonials', 130 );
	function trainssy_product_testimonials() {
		echo comments_template();
	}

	// Подключение заголовка отзыва
	add_action( 'woocommerce_review_comment_text', 'trainssy_review_intro_title', 5 );
	function trainssy_review_intro_title() {
		?>
		<div class="review-item__details-caption">Отзыв о товаре:</div>
		<?php
	}

	// Отключение звездного рейтинга в отзыве WC. Переподключен через обычную функцию в testimonials.php
	remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );

	// Подключение конца обертки таба "Оставить отзыв"
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_tab_4_wrapper_end', 135 );
	function trainssy_single_product_tab_4_wrapper_end() {
		?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	// Подключение конца обертки большой части главной секции товара
	add_action( 'woocommerce_single_product_summary', 'trainssy_single_product_big_wrapper_end', 140 );
	function trainssy_single_product_big_wrapper_end() {
		?>
		</div>
		<?php
	}
	
	// Подключение начала обертки "липкой" боковой инфо-карточки товара
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_product_sticky_card_wrapper_start', 5 );
	function trainssy_product_sticky_card_wrapper_start() {
		?>
		<div class="main-block__product__sticky-card">
            <div class="sticky-card__inside-wrapper">
		<?php
	}

	// Подключение swiper-слайдера изображений товара в липкой инфо-карточке товара (десктопная версия)
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_gallery_sticky_card', 10 );
	function trainssy_gallery_sticky_card() {
		?>
		<div class="swiper-container slider_sticky-card">
			<?php
				get_template_part( 'template-parts/product/slider/swiper-slider' );
				get_template_part( 'template-parts/product/slider/slider-pagination' );
			?>
		</div>
		<?php
	}

	// Подключение информации о наличии товара (В наличии - Не в наличии) в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_product_avaliability', 20 );

	// Подключение начала обертки cta-блока в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_cta_block_wrapper_start', 25 );

	// Подключение цены товара в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_price', 30 );

	// Подключение начала обертки cta-кнопок товара в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_cta_btn_wrapper_start', 35 );

	// Подключение поддельной кнопки "Купить" для перехода в основное окно товара
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_fake_add_to_cart_button', 40 );
	function trainssy_fake_add_to_cart_button() {
		get_template_part( 'template-parts/product/fake-btn-sticky-card' );
	}

	// Подключение кнопки "Добавить в избранное" в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_add_to_wishlist', 45 );

	// Подключение конца обертки cta-кнопок товара в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_cta_btn_wrapper_end', 50 );

	// Подключение конца обертки cta-блока (цена + кнопки "добавить в корзину" и "добавить в избранное") в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_cta_block_wrapper_end', 55 );

	// Подключение уведомления о возможности возврата (десктоп) в липкой инфо-карточке
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_cta_announcement_desktop', 60 );

	// Подключение конца обертки "липкой" боковой инфо-карточки товара
	add_action( 'woocommerce_after_single_product_summary', 'trainssy_product_sticky_card_wrapper_end', 65 );
	function trainssy_product_sticky_card_wrapper_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Переподключение иконок "Поделиться" в социальных сетях
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

	// Смена никнэйма комментатора на Имя и Фамилию
	add_filter( 'get_comment_author', 'wpse_use_user_real_name', 10, 3 ) ;
	function wpse_use_user_real_name( $author, $comment_id, $comment ) {
		$firstname = '' ;
		$lastname = '' ;
		$user_id = $comment->user_id ;

		if ( $user_id ) {
			$user_object = get_userdata( $user_id ) ;
			$firstname = $user_object->user_firstname ;
			$lastname = $user_object->user_lastname ; 
		}

		if ( $firstname || $lastname ) {
			$author = $firstname . ' ' . $lastname ; 
			$author = trim( $author ) ;
		}

		return $author ;
	}


	/**
     *  Кастомизация общей информации о выборе товара (вариативный).
     *  Часть шаблона: variable.php
     */

	// Подключение информации о наличии товара (В наличии - Не в наличии)
	add_action( 'woocommerce_single_variation', 'trainssy_product_avaliability', 14 );
	function trainssy_product_avaliability() {
		get_template_part( 'template-parts/product/avaliability' );
	}

	// Подключение начала обертки cta-блока (цена + кнопки "добавить в корзину" и "добавить в избранное")
	add_action( 'woocommerce_single_variation', 'trainssy_cta_block_wrapper_start', 17 );
	function trainssy_cta_block_wrapper_start() {
		?>
		<div class="selling-block__call-to-action">
		<?php
	}

	// Переподключение цены товара
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	add_action( 'woocommerce_single_variation', 'woocommerce_template_single_price', 18 );

	// Подключение начала обертки cta-кнопок товара
	add_action( 'woocommerce_single_variation', 'trainssy_cta_btn_wrapper_start', 19 );
	function trainssy_cta_btn_wrapper_start() {
		?>
		<div class="call-to-action__buttons">
		<?php
	}

	// Подключение кнопки "Добавить в избранное"
	add_action( 'woocommerce_single_variation', 'trainssy_add_to_wishlist', 25 );
	function trainssy_add_to_wishlist() {
		get_template_part( 'template-parts/product/wishlist-btn' );
	}

	// Подключение конца обертки cta-кнопок товара
	add_action( 'woocommerce_single_variation', 'trainssy_cta_btn_wrapper_end', 30 );
	function trainssy_cta_btn_wrapper_end() {
		?>
		</div>
		<?php
	}

	// Подключение общей информации по поводу Доставки и Оплаты товара
	add_action( 'woocommerce_single_variation', 'trainssy_general_product_info', 35 );
	function trainssy_general_product_info() {
		get_template_part( 'template-parts/product/general-info' );
	}

	// Подключение уведомления о возможности возврата (десктоп)
	add_action( 'woocommerce_single_variation', 'trainssy_cta_announcement_desktop', 40 );
	function trainssy_cta_announcement_desktop() {
		get_template_part( 'template-parts/product/announcement-desktop' );
	}

	// Подключение конца обертки cta-блока (цена + кнопки "добавить в корзину" и "добавить в избранное")
	add_action( 'woocommerce_single_variation', 'trainssy_cta_block_wrapper_end', 45 );
	function trainssy_cta_block_wrapper_end() {
		?>
		</div>
		<?php
	}

	// Изменение максимального кол-ва слов в кратком описании товара (в данном случае исполняет роль "технических характеристик")
	add_filter( 'excerpt_length', 'trainssy_excerpt_length' );
	function trainssy_excerpt_length( $length ) {
		return 999999;
	}


	/**
     *  Кастомизация общей информации о товаре (простой).
     *  Часть шаблона: simple.php
     */

	// Подключение сокращенного описания во вкладке "Все о товаре" (простой товар)
	add_action( 'trainssy_simple_product_before_add_to_cart_btn', 'trainssy_limited_descr', 5 );
	function trainssy_limited_descr() {
		get_template_part( 'template-parts/product/descr-limited' );
	}

	// Подключение информации о наличии товара (В наличии - Не в наличии)
	add_action( 'trainssy_simple_product_before_add_to_cart_btn', 'trainssy_product_avaliability', 15 );

	// Подключение начала обертки cta-блока (цена + кнопки "добавить в корзину" и "добавить в избранное")
	add_action( 'trainssy_simple_product_before_add_to_cart_btn', 'trainssy_cta_block_wrapper_start', 20 );

	// Подключение цены товара в простой товар
	add_action( 'trainssy_simple_product_before_add_to_cart_btn', 'woocommerce_template_single_price', 25 );

	// Подключение начала обертки cta-кнопок товара
	add_action( 'trainssy_simple_product_before_add_to_cart_btn', 'trainssy_cta_btn_wrapper_start', 30 );

	// Подключение кнопки "Добавить в избранное"
	add_action( 'trainssy_simple_product_after_add_to_cart_btn', 'trainssy_add_to_wishlist', 5 );

	// Подключение конца обертки cta-кнопок товара
	add_action( 'trainssy_simple_product_after_add_to_cart_btn', 'trainssy_cta_btn_wrapper_end', 10 );

	// Подключение общей информации по поводу Доставки и Оплаты товара
	add_action( 'trainssy_simple_product_after_add_to_cart_btn', 'trainssy_general_product_info', 15 );

	// Подключение уведомления о возможности возврата (десктоп)
	add_action( 'trainssy_simple_product_after_add_to_cart_btn', 'trainssy_cta_announcement_desktop', 20 );

	// Подключение конца обертки cta-блока (цена + кнопки "добавить в корзину" и "добавить в избранное")
	add_action( 'trainssy_simple_product_after_add_to_cart_btn', 'trainssy_cta_block_wrapper_end', 25 );


	/**
	 * Кастомизация выводимых элементов в подсказках woocommerce (notices)
	 */

	add_filter( 'wc_add_to_cart_message', 'custom_add_to_cart_message' );
	function custom_add_to_cart_message() {
		global $woocommerce;
		$return_to  = '#popup_cart';
		$message    = sprintf('<a href="%s" class="button wc-forward popup-cart-link">%s</a> %s', $return_to, __('Просмотр корзины', 'woocommerce'), __("Товар успешно добавлен в Вашу корзину!", 'woocommerce') );
		return $message;
	}


	// Разрешение протокола Viber'a (кнопка 'поделиться')
	add_filter( 'kses_allowed_protocols', function ( $protocols ) {
		$protocols[] = 'viber';
		return $protocols;
	} );