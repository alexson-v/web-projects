<?php
    /**
     * Часть шаблона: Всплывающее окно Поиска товаров.
     * Подключено к wp_footer.
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<?php
    if( is_archive() or is_single() ) {
        ?>
        <div id="popup_search" class="popup_search">
            <div class="search-popup__body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a class="popup_search__close_mobile close-popup-search">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/common-icons_svg/close-hamburger-button.svg" class="search-popup__close-button" alt="Закрыть">
                            </a>
                        </div>
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                            <?php aws_get_search_form( true ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

?>