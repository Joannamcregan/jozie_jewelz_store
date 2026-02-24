<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function site_files(){
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', false, '', 'all');
    // wp_localize_script('main-ebook-marketplace-js', 'marketplaceData', array(
    //     'root_url' => get_site_url(),        
    //     'nonce' => wp_create_nonce('wp_rest')
    // ));
}
add_action('wp_enqueue_scripts','site_files');
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );