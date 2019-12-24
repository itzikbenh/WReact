<?php 

function theme_styles() {
    wp_enqueue_style( 'vendor_css', get_template_directory_uri() . '/public/css/vendor.css' );
    //To avoid caching I use time, remove it in production.   
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/css/app.css?='.time() );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
    wp_enqueue_script( 'vendor_js', get_template_directory_uri() . '/public/js/vendor.js', '', '', true );    
    //To avoid caching I use time, remove it in production.    
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/js/app.js?='.time(), array('vendor_js'), '', true );

    wp_localize_script(
        'theme_js',
        'theme_data',
        [
            'nonce'             => wp_create_nonce('wp_rest'),
            'site_url'          => network_site_url('/'),
            'is_user_logged_in' => is_user_logged_in(),
            'user_id'           => get_current_user_id(),
            'user_email'        => wp_get_current_user()->user_email,
        ]
    );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 
