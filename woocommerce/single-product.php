<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<main class="single-product">
    <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
		<?php endwhile; // end of the loop. ?>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
        $amazon_link = get_post_meta($post->ID, 'amazon_link', true);
        $barnes_and_noble_link = get_post_meta($post->ID, 'barnes_and_noble_link', true);
        $kobo_link = get_post_meta($post->ID, 'kobo_link', true);
        $bookshop_link = get_post_meta($post->ID, 'bookshop_link', true);
        if ($amazon_link != '' || $barnes_and_noble_link != '' || $barnes_and_noble_link != '' || $kobo_link != ''){
            ?><div id="other-retailers-section">
                <p>Also available from the following retailers:</p>
                <?php if ($bookshop_link != ''){
                    ?><p><a target="_blank" href="<?php echo $bookshop_link; ?>">Bookshop.org</a></p>
                <?php }
                if ($amazon_link != ''){
                    ?><p><a target="_blank" href="<?php echo $amazon_link; ?>">Amazon</a></p>
                <?php }
                if ($barnes_and_noble_link != ''){
                    ?><p><a target="_blank" href="<?php echo $barnes_and_noble_link ?>">Barnes & Noble</a></p>
                <?php }
                if ($kobo_link != ''){
                    ?><p><a target="_blank" href="<?php echo $kobo_link; ?>">Kobo</a></p>
                <?php }
            ?></div>
        <?php }
        ?><div class="single-content">
            <?php echo wpautop(the_content());
            ?><div class="single-top-left-tape tape"></div>
            <div class="single-top-right-tape tape"></div>
            <div class="single-bottom-left-tape tape"></div>
            <div class="single-bottom-right-tape tape"></div>
        </div>
        <div class="blog-comments">
            <?php woocommerce_get_template( 'single-product-reviews.php' );
        ?></div>
    <?php get_template_part( 'template-parts/mode', 'selector' ); ?>
</main>
<div id="ceiling" aria-hidden="true">
    <div id="ceiling-light" aria-hidden="true"></div>
</div>
<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
