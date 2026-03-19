<?php get_header();
?><main>
    <div class="single-content">
        <?php wp_reset_postdata();
        ?><h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="single-top-left-tape tape"></div>
        <div class="single-top-right-tape tape"></div>
        <div class="single-bottom-left-tape tape"></div>
        <div class="single-bottom-right-tape tape"></div>
    </div>
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
<?php get_footer(); ?>