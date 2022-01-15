<?php
    /**
     * Часть шаблона: Заголовок категории
     * Подключено к файлу: wc-functions-archive.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <h4 class="category__title woocommerce-products-header__title page-title"><?php woocommerce_page_title( ); ?></h4>
<?php endif; ?>