<?php
    /**
     * Часть шаблона: Блок информации о наличии товара (В наличии - не в наличии)
     * Подключено к файлу: variable.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
    global $product;
?>

<div class="selling-block__avaliability-status">
    <?php
    if ($product->stock_status == 'instock') {
        ?>
        <div class="avaliability-status__avaliable">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/product-avaliable_icon.svg" alt="!">
            <div class="avaliability-status__avaliable-text">Товар в наличии</div>
        </div>
        
        <?php
    } else {
        ?>
        <div class="avaliability-status__not-avaliable">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/product-not-avaliable_icon.svg" alt="!">
            <div class="avaliability-status__avaliable-text">Товар не в наличии</div>
        </div>
        <?php
    }
    ?>
</div>