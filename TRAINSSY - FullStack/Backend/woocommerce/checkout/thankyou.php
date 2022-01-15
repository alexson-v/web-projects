<?php
	/**
	 * Thankyou page
	 *
	 * @package WooCommerce\Templates
	 * @version 3.7.0
	 */

	defined( 'ABSPATH' ) || exit;
?>

<section class="main-block__purchase">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<h2 class="purchase-title">Оформление заказа</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-7 col-lg-7">
				<div class="gradual-form">
					<div class="gradual-form__progressbar">
						<div class="progress-level active">1</div>
						<hr class="progressbar-line active">
						<div class="progress-level active">2</div>
						<hr class="progressbar-line active">
						<div class="progress-level active">3</div>
						<div class="line-wrapper">
							<hr class="progressbar-line active">
							<i class="progressbar-arrow active"></i>
						</div>
						<div class="progress-level finish active"></div>
					</div>
					<div class="gradual-form__tasks">
						<div class="gradual-form__task active">

							<?php
								if ( $order ) :

								do_action( 'woocommerce_before_thankyou', $order->get_id() );
							?>

							<?php if ( $order->has_status( 'failed' ) ) : ?>

								<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

								<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
									<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
									<?php if ( is_user_logged_in() ) : ?>
										<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
									<?php endif; ?>
								</p>

							<?php else : ?>

							<div class="heading">
								<div class="progress-level content finish"></div>
								<h3 class="title">Заказ успешно оформлен</h3>
							</div>
							<div class="form__task-4">
								<p class="finish-notification">Ожидайте СМС с номером накладной.</p>
								<p class="finish-notification">Мы можем позвонить Вам для уточнения полученных данных.</p>
								<a class="btn" href="<?php echo get_home_url(); ?>">Вернуться на главную <span>страницу</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5">
				<div class="summary-info receipt">
					<div class="woocommerce-order">
						<div class="heading">
							<img class="heading-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/basket-icon.svg" alt="icon">
							<h3 class="heading-title">Детали заказа</h3>
						</div>
						<div class="order-overview">
							<div class="string-wrapper">
								Номер заказа:
								<strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
							</div>
							<div class="string-wrapper">
								Получатель:
								<strong><?php echo $order->get_billing_last_name() . ' ' . $order->get_billing_first_name(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
							</div>
							<div class="string-wrapper">
								Номер телефона:
								<strong><?php echo $order->get_billing_phone(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
							</div>
							<?php
								foreach ( $order->get_order_item_totals() as $key => $total ) {
									?>
									<div class="string-wrapper">
										<?php echo esc_html( $total['label'] ); ?>
										<strong><?php echo ( 'payment_method' === $key ) ? esc_html( $total['value'] ) : wp_kses_post( $total['value'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
									</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php else : ?>

	<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

<?php endif; ?>