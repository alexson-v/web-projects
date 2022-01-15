<?php
    /**
     * Часть шаблона: Детали заказа на странице оформления.
     * Подключено к файлу: wc-functions-checkout.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="order-details">
    <div class="heading">
        <img class="heading-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/basket-icon.svg" alt="icon">
        <h3 class="heading-title">Состав заказа</h3>
    </div>
    <div class="added-products">
        <?php
        do_action( 'woocommerce_review_order_before_cart_contents' );

        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
            $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                ?>
                <div class="added-product">
                    <?php if ( empty( $product_permalink ) ) : ?>
                        <?php echo $thumbnail;  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( $product_permalink ); ?>">
                            <?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </a>
                    <?php endif; ?>
                    <div class="content-wrapper">
                        <a href="<?php echo esc_url( $product_permalink ); ?>" class="product-name"><?php echo $product_name; ?></a>
                        <div class="row-bottom">
                            <p class="product-price__one">
                                <?php echo $product_price; ?>
                            </p>
                            <div class="qty-wrapper">
                                <div class="qty-block">
                                    <?php echo $cart_item['quantity']; ?>
                                </div>
                                <p class="product-amount__text">шт.</p>
                            </div>
                            <p class="product-price__summary">
                                <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok. ?>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }
        } ?>
    </div>
</div>