<?php
    /**
     * Часть шаблона: Общая информация по поводу Доставки и Оплаты товара
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $show_general_info = carbon_get_theme_option( 'tr_product_global_info_show' );
    if ( 'on' == $show_general_info ):
        $general_infos = carbon_get_theme_option( 'tr_product_global_info' );
?>

<div class="general-info">
        <?php
            if ( $general_infos ) :
                $i = 0;
                foreach ( $general_infos as $general_info ) :
                    $i++;
        ?>
        <div class="dropdown">
            <div class="dropdown-heading" data-info-dropdown="<?php echo $i; ?>">
                <span><?php echo esc_html( $general_info[ 'tr_product_global_info_title' ] ); ?></span>
                <img class="dropdown-info-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-thin-icon.svg" data-info-dropdown_icon="<?php echo $i; ?>" alt="Стрелка вниз">
            </div>
            <div class="dropdown-content" data-info-dropdown_content="<?php echo $i; ?>">
                <p><?php echo esc_html( $general_info[ 'tr_product_global_info_par_1' ] ); ?></p>
                <p><?php echo esc_html( $general_info[ 'tr_product_global_info_par_2' ] ); ?></p>
            </div>
        </div>
        <?php
                endforeach;
            endif;
        ?>
</div>

<?php endif; ?>