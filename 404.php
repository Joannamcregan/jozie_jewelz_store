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
    <?php get_template_part( 'template-parts/mode', 'selector' ); ?>
</main>
<?php get_template_part( 'template-parts/ceiling', 'lights' );
get_footer(); ?>