<?php
	/**
	 * The template to display the reviewers meta data (name, verified owner, review date)
	 *
	 * @package WooCommerce\Templates
	 * @version 3.4.0
	 */

	defined( 'ABSPATH' ) || exit;

	global $comment;
	$verified = wc_review_is_from_verified_owner( $comment->comment_ID );

	if ( '0' === $comment->comment_approved ) { ?>

		<p class="meta">
			<em class="woocommerce-review__awaiting-approval">
				<?php esc_html_e( 'Your review is awaiting approval', 'woocommerce' ); ?>
			</em>
		</p>

	<?php } else { ?>

		<div class="meta review-item__details__row">
			<strong class="woocommerce-review__author"><?php comment_author(); ?> </strong>
			<div class="review-item__details-date" datetime="<?php echo esc_attr( get_comment_date( 'c' ) ); ?>">
				<?php echo esc_html( get_comment_date( wc_date_format() ) ); ?>
			</div>
		</div>
		
		<?php
		global $comment;
		$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
		
		if ( $rating && wc_review_ratings_enabled() ) {
			echo wc_get_rating_html( $rating ); // WPCS: XSS ok.
		}
	}