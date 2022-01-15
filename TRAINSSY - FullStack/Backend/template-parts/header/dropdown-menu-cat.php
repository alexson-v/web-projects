<?php
    /**
     * Часть шаблона: Превью "Популярных категорий" в раскрывающемся меню
     * Подключено к файлу: custom-header.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

    $pop_cats = carbon_get_theme_option( 'tr_popular_cats_fields' );
?>

<div class="col-xl-10 col-lg-10">
    <h4 class="categories_title"><?php echo carbon_get_theme_option( 'tr_popular_cats_title' ); ?></h4>
    <div class="categories_preview">
        <?php
            if ( $pop_cats ) :
                foreach ( $pop_cats as $pop_cat ) :
                    $cat_image_id = $pop_cat[ 'tr_popular_cats_thumbnail' ];
                    $cat_image = wp_get_attachment_image_url( $cat_image_id, 'full' );
        ?>
        <a class="category_preview" href="<?php echo esc_html( $pop_cat[ 'tr_popular_cats_link' ] ); ?>" style="background-image: url('<?php echo $cat_image; ?>');">
            <div class="title">
                <h5><?php echo esc_html( $pop_cat[ 'tr_popular_cats_brand' ] ); ?></h5>
                <p>Посмотреть</p>
            </div>
        </a>
        <?php
                endforeach;
            endif;
        ?>
    </div>
</div>