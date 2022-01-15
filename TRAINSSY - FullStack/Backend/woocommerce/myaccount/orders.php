<?php
	/**
	 * Orders
	 *
	 * Shows orders on the account page.
	 *
	 * @package WooCommerce\Templates
	 * @version 3.7.0
	 */

	defined( 'ABSPATH' ) || exit;

	do_action( 'woocommerce_before_account_orders', $has_orders );

	$user = wp_get_current_user();
	$i = 0;
?>

<div class="main-block__account-orders">
	<?php if ( $has_orders ) : ?>
        <div class="account-orders__added woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
			<?php foreach ( $customer_orders->orders as $customer_order ) : ?>
					<?php
						$order = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
						$item_count = $order->get_item_count() - $order->get_item_count_refunded();
						$i++;
					?>
					<div class="account-order woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
						<div class="account-order__row-top">
							<h4 class="account-order__title">Заказ № <?php echo $order->get_order_number() ?></h4>
							<div class="account-order__date-wrapper">
								<p class="account-order__date">от <?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></p>
								<p class="account-order__time"><?php echo date_i18n( __( 'G:i', 'woocommerce' ), strtotime( $order->order_date ) ); ?></p>
							</div>
						</div>
						<ul class="account-order__descr">
							<li>Сумма заказа: <span class="account-order__value"><?php echo wc_price( wc_format_decimal($order->get_total(), 2) - $order->get_total_shipping() ); ?></span></li>
							<li>К оплате: <span class="account-order__value"><?php echo wc_price( wc_format_decimal($order->get_total(), 2) ); ?></span></li>
							<li>Способ оплаты: <span class="account-order__value"><?php echo $payment_method = $order->get_payment_method_title(); ?></span></li>
							<li>Доставка: <span class="account-order__value"><?php echo $order->get_shipping_method(); ?></span></li>
							<li>Статус:
								<?php if( $order->has_status('completed') ) {
									echo '<span class="account-order__value green">';
								} elseif ( $order->has_status('refunded') ) {
									echo '<span class="account-order__value green">';
								} elseif ( $order->has_status('failed') ) {
									echo '<span class="account-order__value red">';
								} elseif ( $order->has_status('cancelled') ) {
									echo '<span class="account-order__value red">';
								} else {
									echo '<span class="account-order__value yellow">';
								} ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?></span>
							</li>
						</ul>
						<div class="account-order__details">
							<div class="details-row open_details" data-details="<?php echo $i; ?>">
								<h5 class="details-row__title">Состав заказа</h5>
								<img class="details-row__icon" data-details="<?php echo $i; ?>" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/dropdown_arrow-icon.svg" alt="↓">
							</div>
							<div class="details-dropdown" data-details="<?php echo $i; ?>">
								<?php
									$order_items = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
									foreach ( $order_items as $item_id => $item ) {
										$product = $item->get_product();
						
										wc_get_template(
											'order/order-details-item.php',
											array(
												'order'              => $order,
												'item_id'            => $item_id,
												'item'               => $item,
												'product'            => $product,
											)
										);
									}
								?>
							</div>
						</div>					
					</div>
					<hr>
			<?php endforeach; ?>

			<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

			<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
				<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
					<?php if ( 1 !== $current_page ) : ?>
						<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
					<?php endif; ?>

					<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
						<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
		<div class="account-orders__empty">
			<div class="account-orders__empty-content">
				<p class="account-orders__empty-text">Вы ещё не совершали покупок в нашем магазине.</p>
				<a class="btn" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">Перейти в каталог</a>
			</div>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
</div>