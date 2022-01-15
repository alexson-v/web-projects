<?php
    /**
     *  Страницы авторизации (вход и регистрация).
     *  Кастомные функции WooCommerce.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    /**
     * Кастомизация страницы авторизации.
     * (form-login-single.php)
     */

    // Подключение начала обертки UI-секции авторизации
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_ui_section_auth_wrapper_start', 5 );
    add_action( 'woocommerce_before_reset_password_form', 'trainssy_ui_section_auth_wrapper_start', 5 );
    function trainssy_ui_section_auth_wrapper_start() {
        ?>
        <section class="ui-elements__authorization">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Подключение хлебных крошек WooCommerce
    add_action( 'woocommerce_before_customer_login_form', 'woocommerce_breadcrumb', 10 );
    add_action( 'woocommerce_before_reset_password_form', 'woocommerce_breadcrumb', 10 );

    // Подключение конца обертки UI-секции авторизации
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_ui_section_auth_wrapper_end', 15 );
    add_action( 'woocommerce_before_reset_password_form', 'trainssy_ui_section_auth_wrapper_end', 15 );
    function trainssy_ui_section_auth_wrapper_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала обертки блока уведомлений
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_all_notices_output_wrapper_start', 20 );
    function trainssy_all_notices_output_wrapper_start() {
        ?>
        <section class="notice">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Переподключение приоретита всех уведомлений WooCommerce в текущем хуке
    remove_action( 'woocommerce_before_customer_login_form', 'woocommerce_output_all_notices', 10 );
    add_action( 'woocommerce_before_customer_login_form', 'woocommerce_output_all_notices', 25 );

    // Подключение уведомления об успешном сбросе пароля
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_password_reset_notice', 30 );
    function trainssy_password_reset_notice() {
        get_template_part( 'template-parts/notices/password-reset' );
    }

    // Подключение конца обертки блока уведомлений
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_all_notices_output_wrapper_end', 35 );
    function trainssy_all_notices_output_wrapper_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала главной секции Страницы авторизации
    add_action( 'woocommerce_before_customer_login_form', 'trainssy_login_section_wrapper_start', 40 );
    function trainssy_login_section_wrapper_start() {
        ?>
        <section class="main_bundle-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bundle-block__wrapper">
        <?php
    }

    // Подключение начала обертки формы авторизации
    add_action( 'woocommerce_login_form_start', 'trainssy_login_form_wrapper_start', 5 );
    function trainssy_login_form_wrapper_start() {
        ?>
        <div class="bundle-block__authorization">
            <div class="bundle-block__authorization-content" id="customer_login">
        <?php
    }

    // Подключение формы авторизации
    add_action( 'woocommerce_login_form', 'trainssy_login_form', 5 );
    function trainssy_login_form() {
        get_template_part( 'template-parts/authorization/page-login/form-login-custom' );
    }

    // Подключение авторизации с помощью Google
    add_action( 'woocommerce_login_form', 'trainssy_login_with_google', 10 );
    function trainssy_login_with_google() {
        get_template_part( 'template-parts/authorization/page-login/google-login' );
    }


    // Подключение конца обертки формы авторизации
    add_action( 'woocommerce_login_form_end', 'trainssy_login_form_wrapper_end', 5 );
    function trainssy_login_form_wrapper_end() {
        ?>
            </div>
        </div>
        <?php
    }

    // Подключение начала обертки предложения регистрации
    add_action( 'trainssy_register_cta', 'trainssy_register_cta_wrapper_start', 5 );
    function trainssy_register_cta_wrapper_start() {
        ?>
        <div class="bundle-block__registration">
            <div class="bundle-block__registration-content">
        <?php
    }

    // Подключение контента предложения регистрации
    add_action( 'trainssy_register_cta', 'trainssy_register_cta_content', 10 );
    function trainssy_register_cta_content() {
        get_template_part( 'template-parts/authorization/page-login/register-cta' );
    }

    // Подключение начала обертки предложения регистрации
    add_action( 'trainssy_register_cta', 'trainssy_register_cta_wrapper_end', 15 );
    function trainssy_register_cta_wrapper_end() {
        ?>
            </div>
        </div>
        <?php
    }

    // Подключение конца главной секции Страницы авторизации
    add_action( 'woocommerce_after_customer_login_form', 'trainssy_login_section_wrapper_end', 5 );
    function trainssy_login_section_wrapper_end() {
        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    
    /**
     * Кастомизация страницы регистрации.
     * (form-registration.php)
     */

    // Подключение начала обертки UI-секции регистрации
    add_action( 'woocommerce_register_form_start', 'trainssy_ui_section_reg_wrapper_start', 5 );
    function trainssy_ui_section_reg_wrapper_start() {
        ?>
        <section class="ui-elements__registration">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Подключение хлебных крошек WooCommerce
    add_action( 'woocommerce_register_form_start', 'woocommerce_breadcrumb', 10 );

    // Подключение конца обертки UI-секции регистрации
    add_action( 'woocommerce_register_form_start', 'trainssy_ui_section_reg_wrapper_end', 15 );
    function trainssy_ui_section_reg_wrapper_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала обертки блока уведомлений
    add_action( 'woocommerce_register_form_start', 'trainssy_all_notices_output_wrapper_start', 20 );

    // Подключение вывода уведомлений WooCommerce
    add_action( 'woocommerce_register_form_start', 'woocommerce_output_all_notices', 25 );

    // Подключение конца обертки блока уведомлений
    add_action( 'woocommerce_register_form_start', 'trainssy_all_notices_output_wrapper_end', 30 );

    // Подключение начала главной секции Страницы регистрации
    add_action( 'woocommerce_register_form_start', 'trainssy_reg_section_wrapper_start', 35 );
    function trainssy_reg_section_wrapper_start() {
        ?>
        <section class="main-block__registration">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="registration-form__wrapper">
        <?php
    }

    // Подключение формы регистрации
    add_action( 'woocommerce_register_form', 'trainssy_reg_form', 5 );
    function trainssy_reg_form() {
        get_template_part( 'template-parts/authorization/page-registration/form-reg-custom' );
    }

    // Подключение конца главной секции Страницы регистрации
    add_action( 'woocommerce_register_form_end', 'trainssy_reg_section_wrapper_end', 5 );
    function trainssy_reg_section_wrapper_end() {
        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Добавление поля ввода номера телефона 
    add_action( 'trainssy_custom_reg_fields', 'trainssy_print_user_tel_field', 10 );
    function trainssy_print_user_tel_field() {
        ?>
        <p class="form-row form-row-first validate-required">
            <input type="text" class="input-text registration-form__input" placeholder="Номер телефона" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
        </p>
        <div class="clear"></div>
        <?php
    }

    // Подключение начала первой обертки полей
    add_action( 'trainssy_custom_reg_fields', 'trainssy_fields_wrapper_1_start', 15 );
    function trainssy_fields_wrapper_1_start() {
        ?>
        <div class="registration-form__inputs-wrapper">
        <?php
    }

    // Добавление полей ввода имени и фамилии
    add_action( 'trainssy_custom_reg_fields', 'trainssy_first_and_last_name_fields', 20 );
    function trainssy_first_and_last_name_fields() {
        ?>
        <p class="form-row form-row-first validate-required">
            <input type="text" class="input-text registration-form__input bundle" placeholder="Имя" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
        </p>
        <p class="form-row form-row-last validate-required">
            <input type="text" class="input-text registration-form__input" placeholder="Фамилия" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
        </p>
        <div class="clear"></div>
        <?php
    }

    // Валидация полей ввода имени, фамилии и номера телефона
    add_filter( 'woocommerce_registration_errors', 'trainssy_validate_name_fields', 10, 3 );
    function trainssy_validate_name_fields( $errors, $username, $email ) {
        if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
            $errors->add( 'billing_first_name_error', __( 'Пожалуйста, укажите ваше имя.', 'woocommerce' ) );
        }
        if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
            $errors->add( 'billing_last_name_error', __( 'Пожалуйста, укажите вашу фамилию.', 'woocommerce' ) );
        }
        if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
            $errors->add( 'billing_phone', __( 'Пожалуйста, укажите действующий номер телефона.', 'woocommerce' ) );
        }
        return $errors;
    }

    // Сохранение полей имени, фамилии и номера телефона
    add_action( 'woocommerce_created_customer', 'trainssy_save_reg_fields' );
    function trainssy_save_reg_fields( $customer_id ) {
        if ( isset( $_POST['billing_phone'] ) ) {
            update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
        }
        if ( isset( $_POST['billing_first_name'] ) ) {
            update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
            update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
        }
        if ( isset( $_POST['billing_last_name'] ) ) {
            update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
            update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
        } 
    }

    // Подключение начала первой обертки полей
    add_action( 'trainssy_custom_reg_fields', 'trainssy_fields_wrapper_1_end', 25 );
    function trainssy_fields_wrapper_1_end() {
        ?>
        </div>
        <?php
    }
    
    // Добавление валидации подтверждения пароля
    add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10, 3 );
    function registration_errors_validation( $reg_errors, $sanitized_user_login, $user_email ) {
        global $woocommerce;
        extract( $_POST );
        if ( strcmp( $password, $password2 ) !== 0 ) {
            return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
        }
        return $reg_errors;
    }

    // Добавление валидации чекбокса Согласия на обработку персональных данных
    add_action( 'woocommerce_register_post', 'data_acception_validation', 20, 3 );
    function data_acception_validation( $username, $email, $validation_errors ) {
        if ( ! isset( $_POST['data_acception'] ) )
            $validation_errors->add( 'data_acception', __( 'Вы должны дать согласие на обработку своих персональных данных.', 'woocommerce' ) );

        return $validation_errors;
    }