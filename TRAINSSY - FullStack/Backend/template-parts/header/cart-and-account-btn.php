<?php
    /**
     * Часть шаблона:
     * Боковое меню с кнопкой вызова попап-корзины и кнопкой-ссылкой на Личный аккаунт.
     * 
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-2 offset-xl-1 col-lg-2 col-md-2 offset-md-0 col-sm-2 offset-sm-1 col-3 offset-1 side-menu_col">
    <nav class="side-menu">
        <ul class="side-menu__navbar d-flex">
            <li class="side-menu__navbar__wrapper d-flex">
                <?php
                    if ( !is_checkout() ) {
                        ?>
                        <a class="popup-cart-link">
                            <img class="navbar__wrapper__basket-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/basket-icon.svg" alt="Моя корзина">
                        </a>
                        <div class="wrapper__basket-counter">
                            <div class="wrapper__basket-counter__ellipse">
                                <p class="basket-counter__ellipse__count-num general">
                                    <a class="cart-contents">
                                        <span class="count">
                                            <?php trainssy_woocommerce_cart_link(); ?>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <img class="navbar__wrapper__basket-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/basket-disabled-icon.svg" alt="Моя корзина">
                        <div class="wrapper__basket-counter">
                            <div class="wrapper__basket-counter__ellipse disabled">
                                <p class="basket-counter__ellipse__count-num general">
                                    <a class="cart-contents">
                                        <span class="count">
                                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </li>
            <li class="d-flex">
                <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>">
                    <img class="navbar__account-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/account-icon.svg" alt="Личный аккаунт">
                </a>
                <div class="navbar__authorization-link">
                    <p class="navbar__authorization-link__caption">
                        <?php
                            if ( is_user_logged_in() ) {
                                echo 'Мой аккаунт';
                            } else echo 'Авторизация'
                        ?>
                    </p>
                </div>
            </li>
        </ul>
    </nav>
</div>