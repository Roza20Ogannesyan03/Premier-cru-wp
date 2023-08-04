<?php

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_features');
add_action('after_setup_theme', 'add_menu');

function add_scripts_and_styles()
{
    if (is_page_template('templates/personal.php')) {
        wp_enqueue_style('personal', get_template_directory_uri() . '/assets/css/personal.css');
    }


    if (is_page_template('templates/discount.php')) {
        wp_enqueue_style('discount', get_template_directory_uri() . '/assets/css/discount.css');
    }

    if (is_page_template('templates/personal.php')) {
        wp_enqueue_style('personal', get_template_directory_uri() . '/assets/css/personal.css');
    }

    wp_enqueue_script('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null, 'footer');
    wp_enqueue_style('style',  get_stylesheet_uri());

    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('slider1', get_template_directory_uri() . '/assets/css/slider1.css');
    wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css');
    wp_enqueue_style('about-us_slider', get_template_directory_uri() . '/assets/css/about-us_slider.css');
    wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');


    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, 'footer');
    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/menu-burger.js', array(), null, 'footer');
    wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), null, 'footer');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, 'footer');

}

function add_features()
{
    add_theme_support('custom-logo', [
        'heoght'  => 60,
        'width'  => 90,
        'flex-width' => false,
        'flex-width' => false,
        'header-text' => '',
        'unlink-homepage-logo' => false,
    ]);
}

function add_menu()
{
    register_nav_menu('top', 'Меню в шапке сайта');
    register_nav_menu('bottom', 'Меню в подвале сайта');
}
