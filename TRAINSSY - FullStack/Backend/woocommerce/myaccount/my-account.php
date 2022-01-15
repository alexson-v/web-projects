<?php
/**
 * My Account page
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' ); ?>

<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>

<?php
	/**
	 * Hook: trainssy_after_account_content
	 * 
	 * @hooked trainssy_account_basic_info_wrapper_end - 5
	 * 
	 * @hooked trainssy_account_sticky_info_wrapper_start - 10
	 * @hooked trainssy_account_client_descr_wrapper_start - 15
	 * @hooked trainssy_account_client_avatar - 20
	 * @hooked trainssy_account_client_contacts - 25
	 * 
	 * @hooked trainssy_account_client_info_wrapper_start - 30
	 * @hooked trainssy_account_client_delivery_method - 35
	 * @hooked trainssy_account_client_purchases_quantity - 40
	 * @hooked trainssy_account_client_reviews_quantity - 45
	 * @hooked trainssy_account_client_info_wrapper_end - 50
	 * 
	 * @hooked trainssy_account_exit_btn - 55
	 * @hooked trainssy_account_sticky_info_wrapper_end - 60
	 * 
	 * @hooked trainssy_contacts_block - 65
	 * 
	 * @hooked trainssy_account_main_section_wrapper_end - 70
	 */
	do_action( 'trainssy_after_account_content' );
?>