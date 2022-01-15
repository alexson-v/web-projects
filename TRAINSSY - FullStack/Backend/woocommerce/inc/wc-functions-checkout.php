<?php
    /**
     *  Страница оформления заказа.
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Подключение заголовка секции
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_checkout_title', 10 );
    function trainssy_checkout_title() {
        get_template_part( 'template-parts/checkout/title' );
    }

    // Подключение начала обертки блока уведомлений
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_all_notices_output_wrapper_start', 1 );

    remove_action( 'woocommerce_checkout_before_customer_details', 'woocommerce_output_all_notices', 1 );

    // Подключение конца обертки блока уведомлений
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_all_notices_output_wrapper_end', 4 );

    // Подключение начала обертки части секции с поэтапной формой Оформления заказа
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_checkout_form_wrapper_start', 30 );
    function trainssy_checkout_form_wrapper_start() {
        ?>
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="gradual-form">
        <?php
    }

    // Подключение прогрессбара оформления заказа
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_checkout_form_progressbar', 35 );
    function trainssy_checkout_form_progressbar() {
        get_template_part( 'template-parts/checkout/progressbar' );
    }

    // Подкючение начала обертки этапов оформления заказа
    add_action( 'woocommerce_checkout_before_customer_details', 'trainssy_checkout_form_tasks_wrapper_start', 40 );
    function trainssy_checkout_form_tasks_wrapper_start() {
        ?>
        <div class="gradual-form__tasks" id="customer_details">
        <?php
    }

    // Подключение части формы с методами оплаты
    remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
    add_action( 'woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment', 5 );

    // Подкючение уведомлений для клиента под полями ввода
    add_action( 'woocommerce_checkout_after_customer_details', 'trainssy_checkout_form_notices', 10 );
    function trainssy_checkout_form_notices() {
        get_template_part( 'template-parts/checkout/form-notices' );
    }

    // Подкючение конца обертки этапов оформления заказа
    add_action( 'woocommerce_checkout_after_customer_details', 'trainssy_checkout_form_tasks_wrapper_end', 15 );
    function trainssy_checkout_form_tasks_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение конца обертки части секции с поэтапной формой Оформления заказа
    add_action( 'woocommerce_checkout_after_customer_details', 'trainssy_checkout_form_wrapper_end', 20 );
    function trainssy_checkout_form_wrapper_end() {
        ?>
            </div>
        </div>
        <?php
    }

    // Подключение деталей заказа
    add_action( 'woocommerce_checkout_before_order_review', 'trainssy_order_details', 5 );
    function trainssy_order_details() {
        get_template_part( 'template-parts/checkout/order-details' );
    }

    // Подключение кастомной (фэйковой) формы ввода купона
    add_action( 'woocommerce_review_order_after_cart_contents', 'woocommerce_checkout_coupon_form_custom' );
    function woocommerce_checkout_coupon_form_custom() {
        get_template_part( 'template-parts/checkout/coupon-field-custom' );
    }

    // Отключение ненужных полей в форме оформления заказа
    add_filter( 'woocommerce_checkout_fields', 'trainssy_required_fields', 25 );
    function trainssy_required_fields( $fields ) {
        unset($fields['order']['order_comments']);
        return $fields;
    }
    add_filter( 'woocommerce_default_address_fields' , 'filter_default_address_fields', 20, 1 );
    function filter_default_address_fields( $address_fields ) {
        if( ! is_checkout() ) return $address_fields;
        $key_fields = array('country', 'address_1','address_2', 'company', 'city', 'state', 'postcode');
        foreach( $key_fields as $key_field )
            $address_fields[$key_field]['required'] = false;
        return $address_fields;
    }

    // Изменение вывода текстов в плагине Новой почты
    add_filter('wcus_checkout_i18n', function ($i18n, $lang) {
        $i18n = [
            'fields_title' => 'Адрес доставки',
            'shipping_type_warehouse' => 'На отделение',
            'shipping_type_doors' => 'На адрес',
            'ui' => [
                'city_placeholder' => 'Город',
                'warehouse_placeholder' => 'Отделение',
                'custom_address_placeholder' => 'Введите адрес',
                'text_search' => 'Введите значение для поиска',
                'text_loading' => 'Загрузка...',
                'text_more' => 'Загрузить еще',
                'text_not_found' => 'Ничего не найдено'
            ]
        ];
    
        return $i18n;
    }, 10, 2);

    
    