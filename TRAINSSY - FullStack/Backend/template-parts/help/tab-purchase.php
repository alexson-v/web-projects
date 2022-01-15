<?php
    /**
     * Часть шаблона: Таб с помощью в категории "Покупки"
     * 
     * Подключено к файлу: trainssy-help-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="main-block__help-tab active" data-help-content="1">
    <?php
        $answers = carbon_get_post_meta( get_the_ID(), 'tr_help_answers_purchase' );
    
        if ( $answers ) {
            foreach ( $answers as $answer ) {
                echo '<div class="topic">';
                echo '<h5 class="question">' . esc_html( $answer[ 'tr_help_question_purchase' ] ) . '</h5>';
                echo '<p class="answer">' . esc_html( $answer[ 'tr_help_answer_purchase' ] ) . '</p>';
                if ($answer[ 'tr_help_answer_purchase_2' ]) {
                    echo '<br><p class="answer">' . esc_html( $answer[ 'tr_help_answer_purchase_2' ] ) . '</p>';
                }
                if ($answer[ 'tr_help_answer_purchase_3' ]) {
                    echo '<br><p class="answer">' . esc_html( $answer[ 'tr_help_answer_purchase_3' ] ) . '</p>';
                }
                echo '</div>';
            }
        }
    ?>
</div>