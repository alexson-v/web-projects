<?php
	/**
	 * My Account navigation
	 *
	 * @package WooCommerce\Templates
	 * @version 2.6.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Hook: woocommerce_before_account_navigation
	 * 
	 * @hooked trainssy_account_ui_elements_wrapper_start - 5
	 * @hooked woocommerce_breadcrumb - 10
	 * @hooked trainssy_account_ui_elements_wrapper_end - 15
	 * @hooked trainssy_all_notices_output_wrapper_start - 20
	 * @hooked woocommerce_output_all_notices - 25
	 * @hooked trainssy_all_notices_output_wrapper_end 30
	 * @hooked trainssy_account_main_section_wrapper_start - 35
	 * @hooked trainssy_account_basic_info_wrapper_start - 40
	 */
	do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="main-block__account-navbar woocommerce-MyAccount-navigation">
	<ul id="accountTabs">
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="account-tab__trigger <?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>
<hr>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>