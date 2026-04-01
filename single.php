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
    <div class="blog-comments">
        <h2 class="centered-text">Comments</h2>
        <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif; ?>
    </div>
    <?php get_template_part( 'template-parts/mode', 'selector' ); ?>
</main>
<div id="ceiling" aria-hidden="true">
    <div id="ceiling-light" aria-hidden="true"></div>
</div>
<?php get_footer(); ?>