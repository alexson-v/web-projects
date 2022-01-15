<?php
    /**
     * Часть шаблона: Аватар клиента.
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $user = wp_get_current_user();
?>

<div class="account-preview__client-image">
    <?php echo do_shortcode( '[avatar_upload]' ); ?>
    <h4 class="client-initials"><?php echo esc_attr( $user->first_name ) . ' ' . esc_attr( $user->last_name ); ?></h4>
</div>
<hr>