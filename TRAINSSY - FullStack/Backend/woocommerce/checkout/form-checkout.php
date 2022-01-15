<?php
	/**
	 * Checkout Form
	 *
	 * @package WooCommerce\Templates
	 * @version 3.5.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	// If checkout registration is disabled and not logged in, the user cannot checkout.
	if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
		echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
		return;
	}

	?>
	<section class="notice">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php
						/**
						 * Hook: woocommerce_before_checkout_form
						 * 
						 * @hooked woocommerce_checkout_coupon_form - 10
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_checkout_login_form - 10 (отключен)
						 */
						do_action( 'woocommerce_before_checkout_form', $checkout );
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="main-block__purchase">
		<div class="container">
			<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
				<?php if ( $checkout->get_checkout_fields() ) : ?>

					<?php
						/**
						 * Hook: woocommerce_checkout_before_customer_details
						 * 
						 * @hooked trainssy_checkout_title - 10
						 * @hooked trainssy_all_notices_output_wrapper_start - 1
						 * @hooked trainssy_all_notices_output_wrapper_end - 4
						 * @hooked trainssy_checkout_form_wrapper_start - 30
						 * @hooked trainssy_checkout_form_progressbar - 35
						 * @hooked trainssy_checkout_form_tasks_wrapper_start - 40
						 * 
						 * @hooked wc_get_pay_buttons - 30
						 */
						do_action( 'woocommerce_checkout_before_customer_details' );

						/**
						 * Hook: woocommerce_checkout_billing
						 *
						 */
						do_action( 'woocommerce_checkout_billing' );

						/**
						 * Hook: woocommerce_checkout_shipping
						 * 
						 */
						do_action( 'woocommerce_checkout_shipping' ); 

						/**
						 * Hook: woocommerce_checkout_after_customer_details
						 * 
						 * @hooked woocommerce_checkout_payment - 5
						 * @hooked trainssy_checkout_form_notices - 10
						 * @hooked trainssy_checkout_form_tasks_wrapper_end - 15
						 * @hooked trainssy_checkout_form_wrapper_end - 20
						 */
						do_action( 'woocommerce_checkout_after_customer_details' );
					?>

				<?php endif; ?>
				
				<div class="col-xl-5 col-lg-5">
					<div class="summary-info">
						<?php
							/**
							 * Hook: woocommerce_checkout_before_order_review
							 * 
							 * @hooked trainssy_order_details - 5
							 */
							do_action( 'woocommerce_checkout_before_order_review' );
	
							/**
							 * Hook: woocommerce_review_order_after_cart_contents
							 * 
							 * @hooked woocommerce_checkout_coupon_form_custom - 5
							 */
							do_action( 'woocommerce_review_order_after_cart_contents' );
						
							/**
							 * Hook: woocommerce_checkout_order_review
							 * 
							 * @hooked woocommerce_order_review - 10
							 */
							do_action( 'woocommerce_checkout_order_review' );
						?>
						
					</div>
				</div>
				<?php
					/**
					 * Hook: woocommerce_checkout_after_order_review
					 * 
					 * @hooked trainssy_checkout_section_wrapper_end - 10
					 */
					do_action( 'woocommerce_checkout_after_order_review' );
				?>
			</form>
			</div>
		</div>
	</div>
</section>

<?php
	/**
	 * Hook: woocommerce_after_checkout_form
	 * 
	 * @hooked 
	 */
	do_action( 'woocommerce_after_checkout_form', $checkout );
?>