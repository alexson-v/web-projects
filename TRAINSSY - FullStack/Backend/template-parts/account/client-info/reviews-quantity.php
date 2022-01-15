<?php
    /**
     * Часть шаблона: Количество оставленных отзывов.
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    global $wpdb, $post, $current_user;
    get_currentuserinfo();
    $userId = $current_user->ID;

    $where = 'WHERE comment_approved = 1 AND user_id = ' . $userId ;
    $comment_count = $wpdb->get_var("SELECT COUNT( * ) AS total 
                                    FROM {$wpdb->comments}
                                    {$where}");
?>

<div class="client-info__wrapper">
    <img class="reviews-icon" src="<?php echo bloginfo('template_url'); ?>/assets/img/reviews-icon.svg" alt="Иконка кол-ва отзывов">
    <p class="reviews-text">
        Оставлено отзывов:
        <span class="reviews-number"><?php echo $comment_count; ?></span>
    </p>
</div>