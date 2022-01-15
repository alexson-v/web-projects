<?php
    /**
     *  Страница личного аккаунта.
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Отключение отдельных табов аккаунта
    add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
    function misha_remove_my_account_links( $menu_links ){
    
        //unset( $menu_links['edit-address'] );
        //unset( $menu_links['dashboard'] );
        //unset( $menu_links['payment-methods'] );
        //unset( $menu_links['orders'] );
        unset( $menu_links['downloads'] );
        //unset( $menu_links['edit-account'] );
        unset( $menu_links['customer-logout'] );
    
        return $menu_links;
    }

    // Переименование и перестановка табов личного кабинета WooCommerce
    add_filter ( 'woocommerce_account_menu_items', 'trainssy_myaccount_tab_triggers_reorder' );
    function trainssy_myaccount_tab_triggers_reorder() {
        $neworder = array(
            'dashboard'     => __( 'Избранное', 'woocommerce' ), // dashboard переделан в "Избранное"
            'orders'       => __( 'Заказы', 'woocommerce' ),
            //'edit-address' => __( 'Адреса', 'woocommerce' ),
            'testimonials' => __( 'Отзывы', 'woocommerce' ),
            'edit-account' => __( 'Редактировать аккаунт', 'woocommerce' ),
        );
        return $neworder;
    }

    // Переименование названия отдельных пунктов хлебных крошек WooCommerce
    add_filter( 'woocommerce_get_breadcrumb', 'my_woocommerce_get_breadcrumb' );
    function my_woocommerce_get_breadcrumb($breadcrumb) {
            foreach ( $breadcrumb as $key => $crumb ) {
                if ($breadcrumb[$key][0] == 'Детали профиля') $breadcrumb[$key][0] = 'Редактировать аккаунт';
                if ($breadcrumb[$key][0] == 'Адрес') $breadcrumb[$key][0] = 'Адреса';
            }
        return $breadcrumb;
    }

    // Отключение обязательности ввода "отображаемого имени"
    add_filter('woocommerce_save_account_details_required_fields', 'trainssy_save_account_details_required_fields' );
    function wc_save_account_details_required_fields( $required_fields ){
        unset( $required_fields['account_display_name'] );
        return $required_fields;
    }

    // Подключение начала обертки ui-элементов Страницы аккаунта
    add_action( 'woocommerce_before_account_navigation', 'trainssy_account_ui_elements_wrapper_start', 5 );
    function trainssy_account_ui_elements_wrapper_start() {
        ?>
        <section class="ui-elements__account">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Подключение кастомных хлебных крошек от WooCommerce
    add_action( 'woocommerce_before_account_navigation', 'woocommerce_breadcrumb', 10 );

    // Подключение конца обертки ui-элементов Страницы аккаунта
    add_action( 'woocommerce_before_account_navigation', 'trainssy_account_ui_elements_wrapper_end', 15 );
    function trainssy_account_ui_elements_wrapper_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала обертки блока уведомлений
    add_action( 'woocommerce_before_account_navigation', 'trainssy_all_notices_output_wrapper_start', 20 );

    // Переподключение уведомлений WooCommerce
    remove_action( 'woocommerce_account_content', 'woocommerce_output_all_notices', 5 );
    add_action( 'woocommerce_before_account_navigation', 'woocommerce_output_all_notices', 25 );

    // Подключение конца обертки блока уведомлений
    add_action( 'woocommerce_before_account_navigation', 'trainssy_all_notices_output_wrapper_end', 30 );

    // Подключение начала главной секции Страницы аккаунта
    add_action( 'woocommerce_before_account_navigation', 'trainssy_account_main_section_wrapper_start', 35 );
    function trainssy_account_main_section_wrapper_start() {
        ?>
        <section class="main-section__account">
            <div class="container">
                <div class="row">
        <?php
    }

    // Подключение начала части секции с основной информацией
    add_action( 'woocommerce_before_account_navigation', 'trainssy_account_basic_info_wrapper_start', 40 );
    function trainssy_account_basic_info_wrapper_start() {
        ?>
        <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="main-block__account">
        <?php
    }

    // Сохранение поля Отчества пользователя
    add_action( 'woocommerce_save_account_details', 'trainssy_save_account_fields', 12, 1 );
    add_action( 'edit_user_profile_update', 'trainssy_save_account_fields' );
    add_action( 'personal_options_update', 'trainssy_save_account_fields' );
    function trainssy_save_account_fields( $user_id ) {
        if( isset( $_POST['billing_patronymic_name'] ) )
            update_user_meta( $user_id, 'billing_patronymic_name', sanitize_text_field( $_POST['billing_patronymic_name'] ) );
        if( isset( $_POST['billing_phone'] ) )
            update_user_meta( $user_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
    }

    // Добавление отчества пользователя в административную панель
    add_action( 'edit_user_profile', 'add_extra_custom_user_data', 1, 1 );
    function add_extra_custom_user_data( $user ) {
        ?>
            <h3>Дополнительные детали</h3>
            <table class="form-table">
                <tr>
                    <th><label for="billing_patronymic_name"><?php _e( 'Отчество', 'woocommerce' ); ?></label></th>
                    <td><input type="text" name="billing_patronymic_name" value="<?php echo esc_attr(get_the_author_meta( 'billing_patronymic_name', $user->ID )); ?>" class="regular-text" /></td>
                </tr>
            </table>
            <br />
        <?php
    }

    // Подключение конца части секции с основной информацией
    add_action( 'trainssy_after_account_content', 'trainssy_account_basic_info_wrapper_end', 5 );
    function trainssy_account_basic_info_wrapper_end() {
        ?>
            </div>
        </div>
        <?php
    }

    // Подключение начала части секции с "липкой" информацией
    add_action( 'trainssy_after_account_content', 'trainssy_account_sticky_info_wrapper_start', 10 );
    function trainssy_account_sticky_info_wrapper_start() {
        ?>
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="additional-blocks__account">
        <?php
    }

    // Подключение начала блока с общей информацией о клиенте
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_descr_wrapper_start', 15 );
    function trainssy_account_client_descr_wrapper_start() {
        ?>
        <div class="account-preview">
        <?php
    }

    // Подключение изменяемого аватара клиента
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_avatar', 20 );
    function trainssy_account_client_avatar() {
        get_template_part( 'template-parts/account/client-info/avatar' );
    }

    // Подключение вывода контактов клиента (E-mail и номер телефона)
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_contacts', 25 );
    function trainssy_account_client_contacts() {
        get_template_part( 'template-parts/account/client-info/contacts' );
    }

    // Подключение начала обертки детальной информации о клиенте
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_info_wrapper_start', 30 );
    function trainssy_account_client_info_wrapper_start() {
        ?>
        <div class="account-preview__client-info">
        <?php
    }

    // Подключение способа доставки клиента по умолчанию
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_delivery_method', 35 );
    function trainssy_account_client_delivery_method() {
        get_template_part( 'template-parts/account/client-info/delivery-method' );
    }

    // Подключение количества покупок клиента
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_purchases_quantity', 40 );
    function trainssy_account_client_purchases_quantity() {
        get_template_part( 'template-parts/account/client-info/purchases-quantity' );
    }

    // Подключение количества оставленных отзывов клиента
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_reviews_quantity', 45 );
    function trainssy_account_client_reviews_quantity() {
        get_template_part( 'template-parts/account/client-info/reviews-quantity' );
    }

    // Подключение конца обертки детальной информации о клиенте
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_info_wrapper_end', 50 );
    function trainssy_account_client_info_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение кнопки "Выйти из аккаунта"
    add_action( 'trainssy_after_account_content', 'trainssy_account_exit_btn', 55 );
    function trainssy_account_exit_btn() {
        get_template_part( 'template-parts/account/exit-btn' );
    }

    // Подключение конца блока с общей информацией о клиенте
    add_action( 'trainssy_after_account_content', 'trainssy_account_client_descr_wrapper_end', 60 );
    function trainssy_account_client_descr_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение блока с контактами магазина
    add_action( 'trainssy_after_account_content', 'trainssy_contacts_block', 65 );

    // Отключение ненужных элементов плагина "One User Avatar"
    remove_action( 'wpua_before_avatar', 'wpua_do_before_avatar' );
    remove_action( 'wpua_after_avatar', 'wpua_do_after_avatar' );

    // Подключение фэйкового инпута по выбору изображения в One User Avatar
    add_action( 'wpua_before_avatar', 'trainssy_after_avatar' );
    function trainssy_after_avatar() {
        echo '<label for="wpua-file-existing" class="input__file-button"><span class="input__file-button-text">Выберите файл</span></label>';
    }
    
    // Добавление вкладки "Отзывы"
    add_action( 'init', 'trainssy_account_add_endpoints' );
    function trainssy_account_add_endpoints() {
        add_rewrite_endpoint( 'testimonials', EP_PAGES );
    }
    add_action( 'woocommerce_account_testimonials_endpoint', 'trainssy_account_testimonials_endpoint_content' );
    function trainssy_account_testimonials_endpoint_content() {
        get_template_part( 'template-parts/account/testimonials' );
    }

    add_filter( 'get_comment_date', 'wpsites_change_comment_date_format' );	
    function wpsites_change_comment_date_format( $d ) {
        $d = date("d.m.Y");	
        return $d;
    }

    // Подключение конца главной секции Страницы аккаунта
    add_action( 'trainssy_after_account_content', 'trainssy_account_main_section_wrapper_end', 70 );
    function trainssy_account_main_section_wrapper_end() {
        ?>   
                </div>
            </div>
        </section>
        <?php
    }