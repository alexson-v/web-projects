<?php
	/**
	 * Result Count
	 *
	 * Shows text: Showing x - x of x results.
	 *ч
	* @package     WooCommerce\Templates
	* @version     3.7.0
	*/

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<div class="category_goods-value">
	<?php
		// phpcs:disable WordPress.Security
		if ( 1 === intval( $total ) ) {
			_e( 'Showing the single result', 'woocommerce' );
		} elseif ( $total <= $per_page || -1 === $per_page ) {
			/* translators: %d: total results */
			printf( _n( 'Showing all %d result', 'Showing all %d results', $total, 'woocommerce' ), $total );
		} else {
			$first = ( $per_page * $current ) - $per_page + 1;
			$last  = min( $total, $per_page * $current );
			/* translators: 1: first result 2: last result 3: total results */
			printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
		} 
	// phpcs:enable WordPress.Security
	?>
</div>
