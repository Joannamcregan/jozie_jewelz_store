<?php get_header(); 
    ?><main class="blog-archive">
        <h1>Blog Posts</h1>
        <div id="blog-post-flyer-container">
            <?php $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1
            );
            $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
            <div class="<?php echo 'post-flyer post-flyer-' . get_the_ID() % 3; ?>">
                <h2><a href='<?php echo get_the_permalink(); ?>'><?php the_title(); ?></a></h2>     
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <?php get_template_part( 'template-parts/mode', 'selector' );
    ?></main>
<?php get_template_part( 'template-parts/ceiling', 'lights' );
get_footer(); ?>