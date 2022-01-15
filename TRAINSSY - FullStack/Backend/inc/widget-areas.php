<?php
    /**
	 * Поля виджетов.
	 * Подключено к functions.php
	 *
	 * @package trainssy
	 */

    add_action( 'widgets_init', 'trainssy_widgets_init' );
    function trainssy_widgets_init() {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Сайдбар магазина', 'trainssy' ),
                'id'            => 'sidebar-shop',
                'description'   => 'Этот сайдбар отображается в Каталоге товаров.',
                'before_widget' => '<div id="%1$s" class="widget %2$s navbar_catalogue navbar_catalogue__unactive">',
                'after_widget'  => '</div>',
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Список желаний (Мой аккаунт)', 'trainssy' ),
                'id'            => 'wishlist-widget',
                'description'   => 'Этот виджет выводит список желаний на странице "Мой аккаунт".',
            )
        );
    }
?>