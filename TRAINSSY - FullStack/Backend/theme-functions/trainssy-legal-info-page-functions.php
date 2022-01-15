<?php
    /**
     *  Страница правовой информации.
     *  Функции по выводу контента страницы.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    // Подключение начала обертки UI-элементов
    add_action( 'trainssy_before_offer_terms', 'trainssy_ui_section_help_wrapper_start', 5 );

    // Подключение хлебных крошек WooCommerce
    add_action( 'trainssy_before_offer_terms', 'woocommerce_breadcrumb', 10 );

    // Подключение конца обертки UI-элементов
    add_action( 'trainssy_before_offer_terms', 'trainssy_ui_section_help_wrapper_end', 15 );

    // Подключение начала обертки секции правовой информации
    add_action( 'trainssy_offer_terms', 'trainssy_main_section_terms_wrapper_start', 5 );
    function trainssy_main_section_terms_wrapper_start() {
        ?>
        <section class="offer-terms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 legal-info-wrapper">
        <?php
    }

    // Подключение начала внутренней обертки документов
    add_action( 'trainssy_offer_terms', 'trainssy_terms_wrapper_start', 10 );
    function trainssy_terms_wrapper_start() {
        ?>
        <div class="main-block__legal-info">
        <?php
    }

    // Подключение триггеров табов с документами
    add_action( 'trainssy_offer_terms', 'trainssy_terms_tab_triggers', 15 );
    function trainssy_terms_tab_triggers() {
        get_template_part( 'template-parts/legal-info/tab-triggers' );
    }

    // Подключение публичного договора (оферты)
    add_action( 'trainssy_offer_terms', 'trainssy_offer_terms_document', 20 );
    function trainssy_offer_terms_document() {
        get_template_part( 'template-parts/legal-info/offer-terms-document' );
    }

    // Подключение политики конфиденциальности
    add_action( 'trainssy_offer_terms', 'trainssy_privacy_policy_document', 25 );
    function trainssy_privacy_policy_document() {
        get_template_part( 'template-parts/legal-info/privacy-policy-document' );
    }

    // Подключение конца внутренней обертки документов
    add_action( 'trainssy_offer_terms', 'trainssy_terms_wrapper_end', 30 );
    function trainssy_terms_wrapper_end() {
        ?>
        </div>
        <?php
    }

    // Подключение блока с контактами магазина
    add_action( 'trainssy_offer_terms', 'trainssy_contacts_block', 35 );

    // Подключение конца обертки секции условий оферты
    add_action( 'trainssy_offer_terms', 'trainssy_main_section_terms_wrapper_end', 40 );
    function trainssy_main_section_terms_wrapper_end() {
        ?>
                     </div>
                </div>
            </div>
        </section>
        <?php
    }