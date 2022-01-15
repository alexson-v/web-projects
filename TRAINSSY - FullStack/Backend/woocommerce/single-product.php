<?php
/**
 * The Template for displaying all single products
 *
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 * !Не действует.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (отключен)
		 * @hooked woocommerce_breadcrumb - 20 (отключен)
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<?php
		/**
		 * trainssy_product_before_main_content hook.
		 * 
		 * @hooked trainssy_ui_elements_content_wrapper_start - 5
		 * 
		 * @hooked trainssy_ui_elements_row_1_start - 10
		 * @hooked trainnsy_product_search_btn_mobile - 15
		 * @hooked woocommerce_breadcrumb - 20 (переподключен)
		 * @hooked trainssy_ui_elements_row_1_end - 25
		 * 
		 * @hooked trainssy_ui_elements_row_2_start - 30
		 * @hooked trainssy_ui_elements_product_name - 35
		 * @hooked trainnsy_product_search_btn_desktop - 40
		 * @hooked trainssy_ui_elements_row_2_end - 45
		 * 
		 * @hooked trainssy_ui_elements_row_3_start - 50
		 * @hooked trainssy_ui_elements_product_code - 55
		 * @hooked trainssy_ui_elements_product_share_mobile - 60
		 * @hooked trainssy_ui_elements_row_3_end - 65
		 * 
		 * @hooked trainssy_ui_elements_content_wrapper_end - 70
		 */
		do_action( 'trainssy_product_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 * !Не действует.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (отключен)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
