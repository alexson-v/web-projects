<?php
    /**
     * Часть шаблона: Таб с помощью в категории "Возврат"
     * 
     * Подключено к файлу: trainssy-help-page-functions.php
     */

    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>

<div class="main-block__help-tab" data-help-content="2">
    <?php
        $answers = carbon_get_post_meta( get_the_ID(), 'tr_help_answers_return' );
    
        if( $answers ) {
            foreach ( $answers as $answer ) {
                echo '<div class="topic">';
                echo '<h5 class="question">' . esc_html( $answer[ 'tr_help_question_return' ] ) . '</h5>';
                echo '<p class="answer">' . esc_html( $answer[ 'tr_help_answer_return' ] ) . '</p>';
                if ($answer[ 'tr_help_answer_return_2' ]) {
                    echo '<br><p class="answer">' . esc_html( $answer[ 'tr_help_answer_return_2' ] ) . '</p>';
                }
                if ($answer[ 'tr_help_answer_return_3' ]) {
                    echo '<br><p class="answer">' . esc_html( $answer[ 'tr_help_answer_return_3' ] ) . '</p>';
                }
                echo '</div>';
            }
        }
    ?>
</div>