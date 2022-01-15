<?php
    /**
     * Часть шаблона: Верхняя часть шапки
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $header_alert = carbon_get_theme_option( 'tr_header_alert_show' );
    if ( 'on' == $header_alert ):
?>

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="header-top__pickup d-flex">
                    <div class="header-top__pickup__info">
                        <span class="header-top__pickup__title">Самовывоз:</span>
                        <?php echo carbon_get_theme_option('tr_pickup'); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2">
                <div class="header-top__phone">
                    <a href="tel:<?php echo carbon_get_theme_option('tr_phonenumber_link'); ?>"><?php echo carbon_get_theme_option('tr_phonenumber'); ?></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="header-top__delivery__info">
                    Доставка по всей Украине!
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>