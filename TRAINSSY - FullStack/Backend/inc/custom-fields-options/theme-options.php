<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make( 'theme_options', 'Настройки темы' )
        ->set_icon( 'dashicons-carrot' )
        ->add_tab( 'Общие', array(
            Field::make( 'radio', 'tr_header_alert_show', 'Показывать дополнительную шапку вверху страницы?' )
                ->add_options( array(
                    'on' => 'Показывать',
                    'off' => 'Скрыть',
                ) )
                ->set_width( 15 ),
            Field::make( 'image', 'tr_header_logo', 'Логотип (чёрный)' )
                ->set_width( 5 ),
            Field::make( 'image', 'tr_footer_logo', 'Логотип (белый)' )
                ->set_width( 30 ),
            Field::make( 'text', 'tr_logo_caption', 'Подпись под логотипом' )
                ->set_default_value( 'Магазин брендовой обуви' )
                ->set_attribute( 'maxLength', '24' ),
            Field::make( 'text', 'tr_phonenumber', 'Телефон компании в формате +38 (068) 079-93-45' )
                ->set_width( 50 ),
            Field::make( 'text', 'tr_phonenumber_link', 'Телефон компании в формате +380680799345' )
                ->set_width( 50 ),
            Field::make( 'text', 'tr_email', 'Электронная почта компании' ),
            Field::make( 'text', 'tr_inst', 'Ссылка на Instagram-аккаунт компании' ),
            Field::make( 'text', 'tr_pickup', 'График самовывоза' ),
        ) )

        // Настройки полей подборки "Популярные категории" в мега-меню
        ->add_tab( 'Популярные категории', array(
            Field::make( 'text', 'tr_popular_cats_title', 'Заголовок подборки' )
				->set_default_value( 'Популярные категории' ),
			Field::make( 'complex', 'tr_popular_cats_fields', 'Содержимое подборки популярных категорий' )
                ->set_layout( 'tabbed-vertical' )
                ->set_max( 4 )
				->add_fields( array(
					Field::make( 'text', 'tr_popular_cats_brand', 'Название категории:' )
						->set_width( 50 ),
					Field::make( 'text', 'tr_popular_cats_link', 'Полная ссылка на страницу категории:' )
						->set_width( 50 ),
					Field::make( 'image', 'tr_popular_cats_thumbnail', 'Фоновое изображение категории:' ),
				) )
				->set_header_template( '<%- tr_popular_cats_brand %>' ),
        ) )

        // Настройки элементов Каталога товаров
        ->add_tab( 'Каталог товаров', array(
            Field::make( 'radio', 'tr_advert_banner_show', 'Показывать рекламный баннер?' )
            ->add_options( array(
                'on' => 'Показывать',
                'off' => 'Скрыть',
            ) )
            ->set_width( 30 ),
            Field::make( 'text', 'tr_archive_advert_banner_link', 'Введите полную ссылку страницы, на которую хотите перенаправить клиента:' )
                ->set_width( 70 ),
            Field::make( 'image', 'tr_archive_advert_banner_img', 'Изображение рекламного баннера:' )
                ->set_width( 100 ),
            
        ) )

        // Настройки элементов Страницы товара
        ->add_tab( 'Страница товара', array(
            Field::make( 'radio', 'tr_product_global_info_show', 'Показывать общую информацию?' )
            ->add_options( array(
                'on' => 'Показывать',
                'off' => 'Скрыть',
            ) )
            ->set_width( 30 ),
            Field::make( 'complex', 'tr_product_global_info', 'Общая информация о заказе (доставка, оплата и т.д.)' )
                ->set_layout( 'tabbed-vertical' )
                ->set_max( 3 )
				->add_fields( array(
					Field::make( 'text', 'tr_product_global_info_title', 'Название подборки информации:' )
						->set_width( 100 ),
                    Field::make( 'textarea', 'tr_product_global_info_par_1', 'Введите параграф текста № 1:' )
                        ->set_width( 50 ),
                    Field::make( 'textarea', 'tr_product_global_info_par_2', 'Введите параграф текста № 2 (опционально):' )
                        ->set_width( 50 ),
				) )
				->set_header_template( '<%- tr_product_global_info_title %>' ),
        ) )
?>