<?php
    /**
     * Часть шаблона: Поддельная кнопка "Купить" для перехода в основное окно товара.
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		  exit; // Exit if accessed directly
	  }

    global $product;
    
    echo wc_get_stock_html( $product ); // WPCS: XSS ok.
    
    if ( $product->is_type( 'variable' ) ) {
      ?>
      <div class="btn selling-block__purchase-btn fake-button_add-to-cart">Купить</div>
      <?php
    } elseif ( $product->is_type( 'simple' ) ) {
      ?>
      <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn selling-block__purchase-btn">Купить</button>
      </form>
      <?php
    } elseif ( $product->is_type( 'external' ) ) {

      $productUrl = $product->product_url;
      $productBtnText = $product->button_text;
      ?>
      <form class="cart" action="<?php echo esc_url( $productUrl ); ?>" method="get">
        <button type="submit" class="btn selling-block__purchase-btn"><?php echo esc_html( $productBtnText ); ?></button>
      </form>
      <?php
    }