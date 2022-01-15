<?php
	/**
	 * Подвал темы.
	 * 
	 * @package trainssy
	 */


	/**
	 * tr_footer_parts hook.
	 *
	 * @hooked trainssy_footer_start - 5
	 * @hooked trainssy_footer_column_first_start - 10
	 * @hooked trainssy_footer_logo_white - 15
	 * @hooked trainssy_footer_anchor_tablet - 20
	 * @hooked trainssy_footer_navi_preview - 25
	 * @hooked trainssy_footer_wrapper1_start - 30
	 * @hooked trainssy_footer_anchor_desktop - 35
	 * @hooked trainssy_footer_phone - 40
	 * @hooked trainssy_footer_wrapper1_end - 45
	 * @hooked trainssy_footer_column_first_end - 50
	 * @hooked trainssy_footer_column_second_start - 55
	 * @hooked trainssy_footer_wrapper2_start - 60
	 * @hooked trainssy_footer_inst - 65
	 * @hooked trainssy_footer_pickup_info - 70
	 * @hooked trainssy_footer_wrapper2_end - 75
	 * @hooked trainssy_footer_banking_options - 80
	 * @hooked trainssy_footer_anchor_mobile - 85
	 * @hooked trainssy_footer_column_second_end - 90
	 * @hooked trainssy_footer_end - 95
	 * @hooked 
	 */
	do_action( 'tr_footer_parts' );

	/**
	 * wp_footer hook.
	 * 
	 * @hooked trainssy_popup_cart - 5
	 * @hooked trainssy_popup_search - 7
	 * @hooked trainssy_popup_filter_mobile - 10
	 * @hooked trainssy_popup_reset_password - 11
	 */
	wp_footer();
?>

	</body>
</html>