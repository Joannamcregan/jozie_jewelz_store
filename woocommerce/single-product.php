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
<main>
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
        $barnes_and_noble_link = '';
        $kobo_link = '';
        $bookshop_link = '';
        if ($amazon_link != ''){
            ?><p>Rather buy it on Amazon? You can do so <a target="_blank" href="<?php echo $amazon_link; ?>">here</a>.</p>
        <?php }
        if (get_post_meta($post->ID, 'barnes_and_noble_link', true) != ''){
            ?><p>If you'd prefer to buy it from Barnes & Noble, you can do so <a target="_blank" href="<?php echo get_post_meta($post->ID, 'barnes_and_noble_link', true); ?>">here</a>.</p>
        <?php }
        if (get_post_meta($post->ID, 'kobo_link', true) != ''){
            ?><p>If you'd like to buy it from Kobo, you can do so <a target="_blank" href="<?php echo get_post_meta($post->ID, 'kobo_link', true); ?>">here</a>.
        <?php }
        if (get_post_meta($post->ID, 'bookshop_link', true) != ''){
            ?><p>If you'd like to buy it from Bookshop.org, you can do so <a target="_blank" href="<?php echo get_post_meta($post->ID, 'bookshop_link', true); ?>">here</a>.
        <?php }
        echo wpautop(the_content());
        woocommerce_get_template( 'single-product-reviews.php' );
		do_action( 'woocommerce_after_main_content' );
	?>
    <div id="mode-selector-wrapper" class="light">
        <div id="mode-selector">
            <img src="<?php echo get_theme_file_uri('/img/glasses_80.png'); ?>" alt="a simple illustration of glasses with black frames" class="selection selected-glasses" data-mode="light"/>
            <img src="<?php echo get_theme_file_uri('/img/sepia_glasses_80.png'); ?>" alt="a simple illustration of glasses with sepia lenses" class="selection" data-mode="sepia"/>
            <img src="<?php echo get_theme_file_uri('/img/dark_glasses_80.png'); ?>" alt="a simple illustration of sunglasses with dark brown frames" class="selection" data-mode="dark"/>
        </div>
    </div>
</main>
<div id="ceiling" aria-hidden="true">
    <div id="ceiling-light" aria-hidden="true"></div>
</div>
<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
