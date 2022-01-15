<?php
    /**
     * Часть шаблона: Контент предложения регистрации
     * Подключено к файлу: wc-functions-authorization.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<h3 class="bundle-block__title">Зарегистрировать аккаунт</h3>
<div class="registration-benefits">
    <p class="registration-benefits__subtitle">Что вы получаете после регистрации?</p>
    <ul class="registration-benefits__features-list">
        <li>Возможность добавлять товары в избранные.</li>
        <li>Осуществление заказа в пару кликов после одноразового заполнения данных в вашем профиле.</li>
        <li>Возможность отслеживать статус обработки заказов.</li>
    </ul>
</div>
<a class="btn registration__btn" href="<?php echo get_permalink(woocommerce_get_page_id('myaccount')) . '?action=register' ?>">Перейти к регистрации</a>