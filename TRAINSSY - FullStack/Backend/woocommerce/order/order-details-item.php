<?php
	/**
	 * Order Item Details
	 *
	 * @package WooCommerce\Templates
	 * @version 5.2.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$product = $item->get_product();
	$product_image = $product->get_image(array( 60, 60));
	if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
		return;
	}
?>
<div class="account-order__detail <?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'woocommerce-table__line-item order_item', $item, $order ) ); ?>">
	<?php echo $product_image; ?>
	<div class="detail-descr">
		<h6 class="detail-descr__name">
			<?php
				$is_visible        = $product && $product->is_visible();
				$product_permalink = apply_filters( 'woocommerce_order_item_permalink', $is_visible ? $product->get_permalink( $item ) : '', $item, $order );
				echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $product_permalink ? sprintf( '<a href="%s">%s</a>', $product_permalink, $item->get_name() ) : $item->get_name(), $item, $is_visible ) );
			?>
		</h6>
		<div class="detail-descr__row">
			<div class="detail-descr__price">
				<?php 
					$total = $item->get_total();
					$qty = $item->get_quantity();
					echo wc_price( $total / $qty );
				?>
			</div>
			<div class="detail-descr__amount">
				<div class="square">
					<?php
						$refunded_qty = $order->get_qty_refunded_for_item( $item_id );
						$qty_display = esc_html( $qty );
						echo apply_filters( 'woocommerce_order_item_quantity_html', $qty_display, $item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					?>
				</div>
				шт.
			</div>
			<div class="detail-descr__price-summary">
				<?php echo $order->get_formatted_line_subtotal( $item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
		</div>
	</div>
	<?php
		do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, false );
		wc_display_item_meta( $item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, false );
	?>
</div>