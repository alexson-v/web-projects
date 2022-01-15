<?php
    /**
     * Часть шаблона: Логотипы товарных брендов на главной странице магазина
     * Подключено к trainssy-landing-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="col-xl-12">
    <div class="logos-wrapper">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/brand-icons_svg/Under-Armour.svg" alt="Under Armour">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/brand-icons_svg/Nike.svg" alt="Nike">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/brand-icons_svg/Jordan.svg" alt="Jordan" class="third">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/brand-icons_svg/New-Balance.svg" alt="New Balance" class="fourth">
    </div>
</div>