<?php

remove_action('wp_head',             'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head'); // remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

// add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
add_filter('use_block_editor_for_post', '__return_false', 10);
add_theme_support('title-tag');

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');

function add_scripts_and_styles()
{

    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, 'footer');
    wp_enqueue_script('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('style',  get_stylesheet_uri());
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');

    if (is_page_template('templates/personal.php')) {
        wp_enqueue_style('personal', get_template_directory_uri() . '/assets/css/personal.css');
        wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
    }


    if (is_post_type_archive('restaurant')) {
        wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
        wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    }

    if (is_post_type_archive('event')) {
        wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
        wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    }


    if (is_singular('restaurant')) {
        wp_enqueue_style('limonchello', get_template_directory_uri() . '/assets/css/limonchello.css');
        wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
        wp_enqueue_script('limonchello', get_template_directory_uri() . '/assets/js/limonchello.js', array(), null, 'footer');
    }


    if (is_front_page('front-page')) {

        wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), null, 'footer');
        wp_enqueue_style('slider1', get_template_directory_uri() . '/assets/css/slider1.css');
        wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css');
        wp_enqueue_style('about-us_slider', get_template_directory_uri() . '/assets/css/about-us_slider.css');
    }

    if (is_singular('event')) {
        wp_enqueue_style('discount', get_template_directory_uri() . '/assets/css/discount.css');
        wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css', array('restaurant'));
    }

    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/menu-burger.js', array(), null, 'footer');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, 'footer');
}


function add_menu()
{
    register_nav_menu('top', 'Меню в шапке сайта');
    register_nav_menu('bottom', 'Меню в подвале сайта');
}


if (function_exists('acf_add_options_page')) {

    $option_page = acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'     => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'     => 'edit_posts',
        'redirect'     => false
    ));
}
