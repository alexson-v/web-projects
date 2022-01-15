<?php
    /**
     * Часть шаблона: Вкладка "Отзывы" в личном кабинете клиента.
     * Подключено к файлу: wc-functions-account.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


    $user_id = get_current_user_id();
    $user_comments = get_comments(array(
        'status' => 'approve',
        'user_id' => $user_id
    ));

    $i = 0;
?>

<div class="main-block__account-testimonials">
    <div class="account-testimonials__added">
        <?php if (count($user_comments) >= 1 ) { ?>

            <?php foreach( $user_comments as $user_comment ) : ?>
                <?php $i++; ?>
                <div class="testimonial-wrapper">
                    <div class="testimonial">
                        <a href="<?php echo get_comment_link($user_comment); ?>" target="_blank">
                            <img class="testimonial_image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($user_comment->comment_post_ID) ); ?>" alt="Фотография товара">
                        </a>
                        <div class="testimonial-elements_container">
                            <div class="elements-bundle">
                                <a href="<?php echo get_comment_link($user_comment); ?>" target="_blank" class="testimonial_product-name">
                                    <?php echo get_the_title($user_comment->comment_post_ID); ?> 
                                </a>
                                <p class="testimonial-date">от
                                    <?php echo date( 'd.m.Y', strtotime($user_comment->comment_date) );?>
                                    <span><?php echo date( 'H:i', strtotime($user_comment->comment_date) ); ?></span>
                                </p>
                            </div>
                            <div class="elements-bundle">
                                <p class="testimonial-content__heading">Ваш отзыв:</p>
                                <p class="testimonial-content__text">
                                    <?php echo $user_comment->comment_content; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="elements-bundle mobile">
                        <p class="testimonial-content__heading">Ваш отзыв:</p>
                        <p class="testimonial-content__text">
                            <?php echo $user_comment->comment_content; ?>
                        </p>
                    </div>
                </div>
                
                <hr>
            <?php endforeach; ?>

        <?php } else { ?>
        <div class="account-testimonials__empty">
            <div class="account-testimonials__empty-text">
                <p class="account-testimonials__empty__first">Вы ещё не оставляли отзывов.</p>
                <p class="account-testimonials__empty__second">Чтобы оставить отзыв, перейдите во вкладку "Оставить отзыв" на странице приобретённого товара.</p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>