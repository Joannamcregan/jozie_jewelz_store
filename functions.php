<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function site_files(){
    wp_enqueue_script('umbrella-js', get_template_directory_uri() . 'umbrella.min.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/build/index.js'), array('umbrella-js'), '1.0', true);
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', false, '', 'all');
    wp_enqueue_style('singles', get_stylesheet_directory_uri() . '/css/singles.css', false, '', 'all');
    wp_enqueue_style('myspace', get_stylesheet_directory_uri() . '/css/myspace.css', false, '', 'all');
    wp_enqueue_style('product', get_stylesheet_directory_uri() . '/css/product.css', false, '', 'all');
    wp_localize_script('custom-js', 'customData', array(
        'root_url' => get_site_url(),        
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts','site_files');
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
// custom post types
function story_custom_post_types() {
    register_post_type('story', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'stories'
        ),
        'public' => true,
        'menu_position' => 3,
        'labels' => array(
            'name' => 'Stories',
            'add_new' => 'Add New Story',
            'edit_item' => 'Edit Stories',
            'all_items' => 'All Stories',
            'singular_item' > 'Story'
        ),
        'menu_icon' => 'dashicons-text-page'
    ));
}
add_action('init', 'story_custom_post_types');
//file types------------------------------------------------------------------------------
function jozie_mime_types($mime_types){
    $mime_types['epub'] = 'application/epub+zip'; 
    unset($mime_types['png']); 
    return $mime_types;
}
add_filter('upload_mimes', 'jozie_mime_types', 1, 1);
// woocommerce support
add_action( 'after_setup_theme', 'jozie_enable_woocommerce_support' );
function jozie_enable_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function jozie_marketplace_remove_product_tabs( $tabs ) {
    unset($tabs['additional_information']); 
    unset($tabs['description']);
    unset($tabs['reviews']);
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'jozie_marketplace_remove_product_tabs', 98 );
// custom product filter------------------------------------------------------------------
function jozie_product_formats(){
    $product_id = get_the_ID(); // Get the current product's ID
    $terms = wp_get_post_terms( $product_id, 'product_cat' );
    if (count($terms) > 0){
        $term = $terms[0];
        echo '<p>This is an ' . $term->name . '.';
    }
}
add_action( 'woocommerce_single_product_summary', 'jozie_product_formats', 9);

function jozie_read_sample(){
    $product_id = get_the_ID();
    $sample = get_post_meta($product_id, 'book_excerpt', true);
    if ($sample){
        ?><p class="sample-link">read a sample</p>
        <div class="sample-div hidden"><?php echo $sample ?></div>
    <?php } else{
        echo 'nope!';
    }
}
add_action( 'woocommerce_single_product_summary', 'jozie_read_sample', 30);