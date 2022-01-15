<?php
/**
 * Шапка темы.
 *
 * @package trainssy
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); echo " | "; bloginfo( 'description' ); ?></title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<body>
    <?php
		get_template_part( '/template-parts/loader' );

		/**
		 * tr_header_parts hook.
		 *
		 * @hooked trainssy_navi_mobile - 5
		 * @hooked trainssy_overlay - 10
		 * @hooked trainssy_header_start - 20
		 * @hooked trainssy_header_top - 25
		 * @hooked trainssy_header_bottom_start - 30
		 * @hooked trainssy_header_logo_black - 35
		 * @hooked trainssy_header_navi_preview - 40
		 * @hooked trainssy_header_phone_tablet - 45
		 * @hooked trainssy_cart_and_account_btn - 50
		 * @hooked trainssy_header_hamburger_btn - 55
		 * @hooked trainssy_header_bottom_end - 60
		 * @hooked trainssy_dropdown_menu_start - 65
		 * @hooked trainssy_dropdown_menu_sidebar - 70
		 * @hooked trainssy_dropdown_menu_cat - 75
		 * @hooked trainssy_dropdown_menu_end - 80
		 */
		do_action( 'tr_header_parts' );
    ?>