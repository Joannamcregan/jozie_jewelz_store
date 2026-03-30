<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

defined( 'ABSPATH' ) || exit;

global $product, $wpdb;
$comments_table = $wpdb->prefix .  "comments";
$meta_table = $wpdb->prefix . "commentmeta";
$post = get_the_ID();

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">
			<?php
			$count = $product->get_review_count();
			if ( $count && wc_review_ratings_enabled() ) {
				/* translators: 1: reviews count 2: product name */
				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'woocommerce' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
			} else {
				esc_html_e( 'Reviews', 'woocommerce' );
			}
			?>
		</h2>

		<?php $comments = $wpdb->get_results("SELECT c.comment_author, c.comment_content, m.meta_value as rating, month(c.comment_date) as comment_month, day(c.comment_date) as comment_day, year(c.comment_date) as comment_year from $comments_table c JOIN $meta_table m ON c.comment_id = m.comment_id AND m.meta_key = 'rating' WHERE comment_post_ID = $post AND comment_type = 'review';"); ?>
		<?php if ($comments) : ?>
			<?php foreach($comments as $comment): ?>
				<div class="tomc-product-single-review">
					<p class="<?php echo 'tomc-product-single-review-stars-' . $comment->rating; ?>"><?php echo '(' . $comment->rating . '/5)'; ?></p>
					<p style="white-space: pre-line">
						<?php echo '"' . $comment->comment_content . '"'; ?>
					</p>
					<p class="right-text">
						<?php echo '-' . $comment->comment_author . ' (' . $comment->comment_month . '/' . $comment->comment_day . '/' . $comment->comment_year . ')'; ?>
					</p>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? esc_html__( 'Add a review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
					/* translators: %s is product title */
					'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
					'title_reply_before'  => '<span id="reply-title" class="comment-reply-title" role="heading" aria-level="3">',
					'title_reply_after'   => '</span>',
					'comment_notes_after' => '',
					'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$name_email_required = (bool) get_option( 'require_name_email', 1 );
				$fields              = array(
					'author' => array(
						'label'        => __( 'Name', 'woocommerce' ),
						'type'         => 'text',
						'value'        => $commenter['comment_author'],
						'required'     => $name_email_required,
						'autocomplete' => 'name',
					),
					'email'  => array(
						'label'        => __( 'Email', 'woocommerce' ),
						'type'         => 'email',
						'value'        => $commenter['comment_author_email'],
						'required'     => $name_email_required,
						'autocomplete' => 'email',
					),
				);

				$comment_form['fields'] = array();

				foreach ( $fields as $key => $field ) {
					$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
					$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

					if ( $field['required'] ) {
						$field_html .= '&nbsp;<span class="required">*</span>';
					}

					$field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $field['type'] ) . '" autocomplete="' . esc_attr( $field['autocomplete'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

					$comment_form['fields'][ $key ] = $field_html;
				}

				$account_page_url = wc_get_page_permalink( 'myaccount' );
				if ( $account_page_url ) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
				}

				if ( wc_review_ratings_enabled() ) {
					$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating" id="comment-form-rating-label">' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '' ) . '</label>
                    <div id="rating-star-container">
                        <div class="rating-star-box" id="rating-star-box-1">
                            <img src="' . get_theme_file_uri('/img/filled_star_1_light.png') . '" aria-label="filled first star" class="filled light hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_1_light.png') . '" aria-label="unfilled first star" class="unfilled light" />
                            <img src="' . get_theme_file_uri('/img/filled_star_1_sepia.png') . '" aria-label="filled first star" class="filled sepia hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_1_sepia.png') . '" aria-label="unfilled first star" class="unfilled sepia" />
                            <img src="' . get_theme_file_uri('/img/filled_star_1_dark.png') . '" aria-label="filled first star" class="filled dark hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_1_dark.png') . '" aria-label="unfilled first star" class="unfilled dark" />
                        </div>
                        <div class="rating-star-box" id="rating-star-box-2">
                            <img src="' . get_theme_file_uri('/img/unfilled_star_2_light.png') . '" aria-label="unfilled second star" class="unfilled light" />
                            <img src="' . get_theme_file_uri('/img/filled_star_2_light.png') . '" aria-label="filled second star" class="filled light hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_2_sepia.png') . '" aria-label="unfilled second star" class="unfilled sepia" />
                            <img src="' . get_theme_file_uri('/img/filled_star_2_sepia.png') . '" aria-label="filled second star" class="filled sepia hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_2_dark.png') . '" aria-label="unfilled second star" class="unfilled dark" />
                            <img src="' . get_theme_file_uri('/img/filled_star_2_dark.png') . '" aria-label="filled second star" class="filled dark hidden" />
                        </div>
                        <div class="rating-star-box" id="rating-star-box-3">
                            <img src="' . get_theme_file_uri('/img/unfilled_star_3_light.png') . '" aria-label="unfilled third star" class="unfilled light" />
                            <img src="' . get_theme_file_uri('/img/filled_star_3_light.png') . '" aria-label="filled third star" class="filled light hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_3_sepia.png') . '" aria-label="unfilled third star" class="unfilled sepia" />
                            <img src="' . get_theme_file_uri('/img/filled_star_3_sepia.png') . '" aria-label="filled third star" class="filled sepia hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_3_dark.png') . '" aria-label="unfilled third star" class="unfilled dark" />
                            <img src="' . get_theme_file_uri('/img/filled_star_3_dark.png') . '" aria-label="filled third star" class="filled dark hidden" />
                        </div>
                        <div class="rating-star-box" id="rating-star-box-4">
                            <img src="' . get_theme_file_uri('/img/unfilled_star_4_light.png') . '" aria-label="unfilled fourth star" class="unfilled light" />
                            <img src="' . get_theme_file_uri('/img/filled_star_4_light.png') . '" aria-label="filled fourth star" class="filled light hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_4_sepia.png') . '" aria-label="unfilled fourth star" class="unfilled sepia" />
                            <img src="' . get_theme_file_uri('/img/filled_star_4_sepia.png') . '" aria-label="filled fourth star" class="filled sepia hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_4_dark.png') . '" aria-label="unfilled fourth star" class="unfilled dark" />
                            <img src="' . get_theme_file_uri('/img/filled_star_4_dark.png') . '" aria-label="filled fourth star" class="filled dark hidden" />
                        </div>
                        <div class="rating-star-box" id="rating-star-box-5">
                            <img src="' . get_theme_file_uri('/img/unfilled_star_5_light.png') . '" aria-label="unfilled fifth star" class="unfilled light" />
                            <img src="' . get_theme_file_uri('/img/filled_star_5_light.png') . '" aria-label="filled fifth star" class="filled light hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_5_sepia.png') . '" aria-label="unfilled fifth star" class="unfilled sepia" />
                            <img src="' . get_theme_file_uri('/img/filled_star_5_sepia.png') . '" aria-label="filled fifth star" class="filled sepia hidden" />
                            <img src="' . get_theme_file_uri('/img/unfilled_star_5_dark.png') . '" aria-label="unfilled fifth star" class="unfilled dark" />
                            <img src="' . get_theme_file_uri('/img/filled_star_5_dark.png') . '" aria-label="filled fifth star" class="filled dark hidden" />
                        </div>
                    </div>
                    <select name="rating" id="rating" required>
						<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
						<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
						<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
						<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
						<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
						<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
					</select></div>';
				}

				$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your review', 'woocommerce' ) . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
	<?php endif; ?>

	<div class="clear"></div>
</div>
