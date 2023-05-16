<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('swiper-script',  'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
    wp_enqueue_script( 'skrollrMin', 'http://d3a1v57rabk2hm.cloudfront.net/maxjacobson/bold_mobile-copy-8/js/skrollr.min.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'child_thm_script');
function child_thm_script() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), 1.1, true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}