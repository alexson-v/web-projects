<?php
    /**
     *  Страница помощи.
     *  Функции по выводу контента страницы.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    // Подключение начала UI-секции Страницы помощи
    add_action( 'trainssy_help_before_main_section', 'trainssy_ui_section_help_wrapper_start', 5 );
    function trainssy_ui_section_help_wrapper_start() {
        ?>
        <section class="ui-elements__help">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
        <?php
    }

    // Подключение кастомных хлебных крошек WooCommerce
    add_action( 'trainssy_help_before_main_section', 'woocommerce_breadcrumb', 10 );

    // Подключение конца UI-секции Страницы помощи
    add_action( 'trainssy_help_before_main_section', 'trainssy_ui_section_help_wrapper_end', 15 );
    function trainssy_ui_section_help_wrapper_end() {
        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    // Подключение начала главной секции Страницы помощи
    add_action( 'trainssy_help_main_section', 'trainssy_main_section_help_wrapper_start', 5 );
    function trainssy_main_section_help_wrapper_start() {
        ?>
        <section class="main-section__help">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-section__inside-wrapper">
        <?php
    }

    // Подключение начала обертки главного блока секции Страницы помощи
    add_action( 'trainssy_help_main_section', 'trainssy_main_block_help_wrapper_start', 10 );
    function trainssy_main_block_help_wrapper_start() {
        ?>
        <div class="main-block__help">
        <?php
    }

    // Подключение триггеров табов Страницы помощи
    add_action( 'trainssy_help_main_section', 'trainssy_help_tab_triggers', 15 );
    function trainssy_help_tab_triggers() {
        get_template_part( 'template-parts/help/tab-triggers' );
    }

    // Подключение таба с помощью в категории "Покупки"
    add_action( 'trainssy_help_main_section', 'trainssy_help_tab_content_purchase', 20 );
    function trainssy_help_tab_content_purchase() {
        get_template_part( 'template-parts/help/tab-purchase' );
    }

    // Подключение таба с помощью в категории "Возврат"
    add_action( 'trainssy_help_main_section', 'trainssy_help_tab_content_return', 25 );
    function trainssy_help_tab_content_return() {
        get_template_part( 'template-parts/help/tab-return' );
    }

    // Подключение конца обертки главного блока секции Страницы помощи
    add_action( 'trainssy_help_main_section', 'trainssy_main_block_help_wrapper_end', 30 );
    function trainssy_main_block_help_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение блока с контактами магазина
    add_action( 'trainssy_help_main_section', 'trainssy_contacts_block', 35 );
    function trainssy_contacts_block() {
        get_template_part( 'template-parts/contacts-block' );
    }

    // Подключение конца главной секции Страницы помощи
    add_action( 'trainssy_help_main_section', 'trainssy_main_section_help_wrapper_end', 40 );
    function trainssy_main_section_help_wrapper_end() {
        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }