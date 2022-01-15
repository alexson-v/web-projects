<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

	// Настройки слайдера-оффера на Главной странице магазина
	Container::make( 'post_meta', 'Настройки элементов Главной страницы' )
		->show_on_page( 368 )
		->add_fields( array(
			Field::make( 'complex', 'tr_main_offer_slider', 'Введите/измените содержимое карусели' )->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'tr_before_title_offer', 'Верхний малый заголовок:' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_title_offer', 'Заголовок:' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_after_title_offer', 'Нижний малый заголовок:' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_highlight_after_title_offer', 'Выделить часть нижнего малого заголовка (опционально):' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_btn_text_offer', 'Текст в кнопке слайда:' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_btn_link_offer', 'Полная ссылка страницы, на которую направляет кнопка:' )
						->set_width( 50 ),
					Field::make( 'image', 'tr_background_image_offer', 'Фоновое изображение слайда (1600х593px в формате webp):' ),
				) )
				->set_header_template( '<%- tr_title_offer %>' ),
		) )
		->add_fields( array(
			Field::make( 'complex', 'tr_main_medium_banners', 'Введите/измените содержимое средних баннеров' )
				->set_layout( 'tabbed-vertical' )
				->set_max( 4 )
				->add_fields( array(
					Field::make( 'image', 'tr_medium_banner_img', 'Изображение баннера (1:1):' )
						->set_width( 30 ),
					Field::make( 'text', 'tr_medium_banner_link', 'Полная ссылка страницы, на которую направляет баннер:' )
						->set_width( 70 ),
				) ),
		) )
		->add_fields( array(
			Field::make( 'separator', 'tr_main_big_banner_top_separator', 'Введите/измените содержимое больших баннеров' ),
			Field::make( 'image', 'tr_main_big_banner_top_img', 'Изображение верхнего баннера (2:1):' )
				->set_width( 30 ),
			Field::make( 'text', 'tr_main_big_banner_top_link', 'Полная ссылка страницы, на которую направляет верхний баннер:' )
				->set_width( 70 ),
			Field::make( 'image', 'tr_main_big_banner_bottom_img', 'Изображение нижнего баннера (2:1):' )
				->set_width( 30 ),
			Field::make( 'text', 'tr_main_big_banner_bottom_link', 'Полная ссылка страницы, на которую направляет нижний баннер:' )
				->set_width( 70 ),
		) )
		->add_fields( array(
			Field::make( 'complex', 'tr_main_small_banners', 'Введите/измените содержимое малых баннеров' )
				->set_layout( 'tabbed-vertical' )
				->set_max( 3 )
				->add_fields( array(
					Field::make( 'image', 'tr_small_banner_img', 'Изображение баннера (1:1):' )
						->set_width( 30 ),
					Field::make( 'text', 'tr_small_banner_link', 'Полная ссылка страницы, на которую направляет баннер:' )
						->set_width( 70 ),
				) ),
		) );
	
	

	// Настройки вопросов и ответов на странице Помощи
	Container::make( 'post_meta', 'Вопросы и ответы' )
		->show_on_page( 'help' )
		->add_fields( array(
			Field::make( 'complex', 'tr_help_answers_purchase', 'Категория "Покупки"' )->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'tr_help_question_purchase', 'Вопрос:' )
						->set_width( 100 ),
					Field::make( 'textarea', 'tr_help_answer_purchase', 'Ответ:' )
						->set_width( 100 )
						->set_rows( 2 ),
					Field::make( 'textarea', 'tr_help_answer_purchase_2', 'Ответ (параграф №2) - опционально:' )
						->set_width( 100 )
						->set_rows( 2 ),
					Field::make( 'textarea', 'tr_help_answer_purchase_3', 'Ответ (параграф №3) - опционально:' )
						->set_width( 100 )
						->set_rows( 2 ),
				) )
				->set_header_template( '<%- tr_help_question_purchase %>' ),
		) )
		->add_fields( array(
			Field::make( 'complex', 'tr_help_answers_return', 'Категория "Возврат"' )->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'tr_help_question_return', 'Вопрос:' )
						->set_width( 100 ),
					Field::make( 'textarea', 'tr_help_answer_return', 'Ответ:' )
						->set_width( 100 )
						->set_rows( 2 ),
					Field::make( 'textarea', 'tr_help_answer_return_2', 'Ответ (параграф №2) - опционально:' )
						->set_width( 100 )
						->set_rows( 2 ),
					Field::make( 'textarea', 'tr_help_answer_return_3', 'Ответ (параграф №3) - опционально:' )
						->set_width( 100 )
						->set_rows( 2 ),
				) )
				->set_header_template( '<%- tr_help_question_return %>' ),
		) );