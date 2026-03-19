<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function site_files(){
    wp_enqueue_script('umbrella-js', get_template_directory_uri() . 'umbrella.min.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/build/index.js'), array('umbrella-js'), '1.0', true);
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', false, '', 'all');
    wp_enqueue_style('singles', get_stylesheet_directory_uri() . '/css/singles.css', false, '', 'all');
    wp_enqueue_style('myspace', get_stylesheet_directory_uri() . '/css/myspace.css', false, '', 'all');
    wp_localize_script('custom-js', 'customData', array(
        'root_url' => get_site_url(),        
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts','site_files');
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

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
            'name' => 'Story',
            'add_new' => 'Add New Story',
            'edit_item' => 'Edit Stories',
            'all_items' => 'All Stories',
            'singular_item' > 'Story'
        ),
        'menu_icon' => 'dashicons-text-page'
    ));
}

add_action('init', 'story_custom_post_types');