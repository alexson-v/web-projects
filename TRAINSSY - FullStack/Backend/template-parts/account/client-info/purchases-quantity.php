<?php
    /**
     * Часть шаблона: Количество покупок клиента.
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $user = wp_get_current_user();
    $numorders = wc_get_customer_order_count( $user->ID );
    $args = array(
        'customer_id' => $user->ID,
        'post_status' => 'cancelled',
        'post_type' => 'shop_order',
        'return' => 'ids',
    );
    $numorders_cancelled = 0;
    $numorders_cancelled = count( wc_get_orders( $args ) );
    $num_not_cancelled = $numorders - $numorders_cancelled;
?>

<div class="client-info__wrapper">
    <img class="delivery_green-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/delivery_black-icon.svg" alt="Иконка кол-ва покупок">
    <p class="delivered-text">Всего покупок:</p>
    <span class="delivered-number"><?php echo $num_not_cancelled; ?></span>
</div>