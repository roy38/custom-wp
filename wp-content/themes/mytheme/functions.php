<?php

//Load stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('modal_form', get_template_directory_uri() . '/css/modal_form.css', array(), false, 'all');
    wp_enqueue_style('modal_form');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load scripts
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');

// 404 css
add_action( 'wp_enqueue_scripts', 'error_400_css' );
function error_400_css() {
    if( is_404() ){
        wp_register_style( 'err404', get_template_directory_uri() . '/css/err404.css');
        wp_enqueue_style('err404');
    }
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';

    // return
    return $paths;
}

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menus
register_nav_menus(
    array(
        'desktop-menu' => 'Desktop Menu',
        'mobile-menu' => 'Mobile Menu',
        'footer-menu' => 'Footer Menu'
    )
);

/**
 * SETUP ACF OPTIONS
 */
function tuesdayhealth_theme_options_page_func()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
        'page_title'    => 'TuesdayHealth Options',
        'menu_title'    => 'TuesdayHealth Options',
        'menu_slug'     => 'tuesdayhealth-theme-options',
        'capability'    => 'edit_posts',
        'position'      => 59,
        'icon_url'      => 'dashicons-admin-generic',
        'redirect'      => false
        ));
    }
}
add_action('init', 'tuesdayhealth_theme_options_page_func');