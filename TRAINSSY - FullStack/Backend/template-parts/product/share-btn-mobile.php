<?php
    /**
     * Часть шаблона: Кнопка "Поделиться" в мобильной версии.
     * Подключено к файлу: wc-functions-product.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<button class="ui-elements__share-icon">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/share-icon.svg" alt="Поделиться">
</button>
<div class="ui-elements__share-popup">
    <?php   
        // Подключение иконок "Поделиться" в социальных сетях
        if ( function_exists( 'sharing_display' ) ) {
            sharing_display( '', true );
        }
        if ( class_exists( 'Jetpack_Likes' ) ) {
            $custom_likes = new Jetpack_Likes;
            echo $custom_likes->post_likes( '' );
        }
    ?>
    <img class="ui-elements__share-close_icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" alt="X">
</div>