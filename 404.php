<?php get_header();

?><main>
<div class="page-404">
    <div class="top-note">
        <h1>404</h1>
    </div>
    <div class="bottom-note">
        <p>Sorry, looks like we lost you! <a>Head home.</a></p>
    </div>
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