<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

	Container::make( 'post_meta', 'Налаштування полів Головної сторінки:' )
		

		->add_fields( array(
            Field::make( 'separator', 'eym_separator_general', 'Електронна пошта і посилання на соціальні мережі громадської організації:' ),
			Field::make( 'text', 'eym_email', 'Електронна пошта організації:' ),
            Field::make( 'text', 'eym_facebook', 'Facebook-посилання:' )
                ->set_width( 33 ),
            Field::make( 'text', 'eym_telegram', 'Telegram-посилання:' )
                ->set_width( 33 ),
            Field::make( 'text', 'eym_instagram', 'Instagram-посилання:' )
                ->set_width( 33 ),
			Field::make( 'text', 'eym_copyright', 'Повідомлення про право копірайту:' )
                ->set_width( 100 ),
        ) )

        ->add_fields( array(
			Field::make( 'separator', 'eym_separator_about', 'Про громадську організацію:' ),
            Field::make( 'textarea', 'eym_about_par_1_1', 'Параграф № 1/1 (навпроти карти України):' )
                ->set_width( 50 ),
            Field::make( 'textarea', 'eym_about_par_1_2', 'Параграф № 1/2 (навпроти карти України):' )
                ->set_width( 50 ),
            Field::make( 'textarea', 'eym_about_par_2_1', 'Параграф № 2/1 (навпроти літака):' )
                ->set_width( 50 ),
            Field::make( 'textarea', 'eym_about_par_2_2', 'Параграф № 2/2 (навпроти літака):' )
                ->set_width( 50 ),
            Field::make( 'textarea', 'eym_about_par_3_1', 'Параграф № 3/1 (навпроти міні-логотипу):' )
                ->set_width( 33 ),
            Field::make( 'textarea', 'eym_about_par_3_2', 'Параграф № 3/2 (навпроти міні-логотипу):' )
                ->set_width( 33 ),
            Field::make( 'textarea', 'eym_about_par_3_3', 'Параграф № 3/3 (навпроти міні-логотипу):' )
                ->set_width( 33 ),
        ) )

		->add_fields( array(
			Field::make( 'separator', 'eym_separator_support', 'Секція "Підтримати":' ),
            Field::make( 'textarea', 'eym_support_subtitle', 'Текст у підзаголовку (може бути великим):' )
                ->set_width( 100 ),
			Field::make( 'text', 'eym_support_uah_1', 'Отримувач коштів (грн):' )
                ->set_width( 20 ),
			Field::make( 'text', 'eym_support_uah_2', 'Призначення платежу (грн):' )
                ->set_width( 20 ),
			Field::make( 'text', 'eym_support_uah_3', 'Код отримувача (грн):' )
                ->set_width( 20 ),
			Field::make( 'text', 'eym_support_uah_4', 'Банк отримувача (грн):' )
                ->set_width( 20 ),
			Field::make( 'text', 'eym_support_uah_5', 'Рахунок отримув. (IBAN) (грн):' )
                ->set_width( 20 ),
			Field::make( 'text', 'eym_support_usd_1', 'Банк отримувача (€ і $):' )
                ->set_width( 25 ),
			Field::make( 'text', 'eym_support_usd_2', 'Рахунок отримувача (IBAN) (€ і $):' )
                ->set_width( 25 ),
			Field::make( 'text', 'eym_support_usd_3', 'Банк посередник - Платежі у EUR (€ і $):' )
                ->set_width( 25 ),
			Field::make( 'text', 'eym_support_usd_4', 'Банк посередник - Платежі у USD (€ і $):' )
                ->set_width( 25 ),
			Field::make( 'textarea', 'eym_support_crc_1', 'Криптогаманець BTC (₿):' )
                ->set_width( 25 ),
			Field::make( 'textarea', 'eym_support_crc_2', 'Криптогаманець ETH (₿):' )
                ->set_width( 25 ),
			Field::make( 'textarea', 'eym_support_crc_3', 'Криптогаманець USD TRC20 (₿):' )
                ->set_width( 25 ),
			Field::make( 'textarea', 'eym_support_crc_4', 'Пояснення (₿):' )
                ->set_width( 25 ),
        ) )

		->add_fields( array(
			Field::make( 'separator', 'eym_separator_values', 'Цінності громадської організації:' ),
			Field::make( 'complex', 'eym_values_info', 'Додати/редагувати цінності' )
				->set_layout( 'tabbed-vertical' )
				->set_max( 2 )
				->add_fields( array(
					Field::make( 'text', 'eym_values_name_1', 'Назва цінності № 1:' )
						->set_width( 50 ),
					Field::make( 'text', 'eym_values_name_2', 'Назва цінності № 2:' )
						->set_width( 50 ),
					Field::make( 'textarea', 'eym_values_text_1', 'Опис цінності № 1:' )
						->set_width( 50 ),
					Field::make( 'textarea', 'eym_values_text_2', 'Опис цінності № 2:' )
						->set_width( 50 ),
				) ),
			Field::make( 'text', 'eym_values_last_name_1', 'Назва цінності № 1 (3 рядок):' )
				->set_width( 50 ),
			Field::make( 'text', 'eym_values_last_name_2', 'Назва цінності № 2 (3 рядок):' )
				->set_width( 50 ),
			Field::make( 'textarea', 'eym_values_last_text_1', 'Опис цінності № 1 (3 рядок):' )
				->set_width( 50 ),
			Field::make( 'textarea', 'eym_values_last_text_2', 'Опис цінності № 2 (3 рядок):' )
				->set_width( 50 ),
		) )

		->add_fields( array(
			Field::make( 'separator', 'eym_separator_team', 'Команда громадської організації:' ),
			Field::make( 'complex', 'eym_team_info', 'Додати/редагувати дані про членів команди' )
				->set_layout( 'tabbed-vertical' )
				->set_max( 8 )
				->add_fields( array(
					Field::make( 'image', 'eym_team_info_img_preview', 'Зображення члена команди (мале квадратне):' )
						->set_width( 50 ),
					Field::make( 'image', 'eym_team_info_img_extended', 'Зображення члена команди (велике портретне):' )
						->set_width( 50 ),
					Field::make( 'text', 'eym_team_info_name_short', 'Скорочене ім`я (І+П):' )
						->set_width( 33 ),
					Field::make( 'text', 'eym_team_info_name_full', 'Повне ім`я (ПІБ):' )
						->set_width( 33 ),
					Field::make( 'text', 'eym_team_info_position', 'Позиція в організації:' )
						->set_width( 33 ),
					Field::make( 'textarea', 'eym_team_info_quote', 'Цитата:' )
						->set_width( 50 ),
					Field::make( 'complex', 'eym_team_info_list', 'Факти про особу:' )
						->set_layout( 'tabbed-vertical' )
						->set_max( 5 )
						->set_width( 50 )
					->add_fields( array(
						Field::make( 'textarea', 'eym_team_info_list_item', 'Факт' ),
					) ),
					Field::make( 'text', 'eym_team_info_email', 'Електронна пошта члена команди:' )
						->set_width( 50 ),
					Field::make( 'text', 'eym_team_info_telegram', 'Telegram члена команди:' )
						->set_width( 50 ),
				) )
				->set_header_template( '<%- eym_team_info_name_short %>' ),
		) )

		->add_fields( array(
			Field::make( 'separator', 'eym_separator_projects', 'Проекти громадської організації:' ),
			Field::make( 'complex', 'eym_projects_info', 'Додати/редагувати дані про проекти організації' )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'image', 'eym_projects_info_img', 'Прев`ю проекту (прямокутне):' )
						->set_width( 40 ),
					Field::make( 'text', 'eym_projects_info_link', 'Посилання на проект:' )
						->set_width( 60 ),
					Field::make( 'textarea', 'eym_projects_info_title', 'Назва проекту:' )
						->set_width( 50 ),
					Field::make( 'textarea', 'eym_projects_info_text', 'Невеликий опис проекту:' )
						->set_width( 50 ),
				) ),
		) );