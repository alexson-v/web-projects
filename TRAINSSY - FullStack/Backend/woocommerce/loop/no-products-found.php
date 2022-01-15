<?php
    /**
     * Displayed when no products are found matching the current query
     *
     * @package WooCommerce\Templates
     * @version 2.0.0
     */

    defined( 'ABSPATH' ) || exit;

    $inst_card_id = carbon_get_theme_option('tr_archive_inst_card_img');
    $inst_card = $inst_card_id ? wp_get_attachment_image_src($inst_card_id, 'full') : '';
?>

<div class="category_no-products">
    <h5 class="category_no-products__alert">
        К большому сожалению, товары этой категории пока что отсутствуют.
        <br><br>
        Следите за новыми поступлениями в нашем Instagram!
    </h5>
    <a href="<?php echo carbon_get_theme_option('tr_inst'); ?>" target="_blank" class="category_no-products__alert-highlighter">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/inst-cta.webp" width="250" height="250" alt="Перейти в Instagram магазина">
    </a>
</div>
