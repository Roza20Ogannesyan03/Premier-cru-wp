<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header class="header <?php if (is_singular('restaurant')) {
                                echo 'rest_white';
                            } ?> ">
        <div class="header__container <?php if (is_singular('restaurant')) {
                                            echo 'rest_white';
                                        } ?> ">
            <?php if (!is_front_page()) { ?>
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php if (is_singular('restaurant')) {
                                        echo get_template_directory_uri(); ?>/assets/images/rest-logo.svg<?php } else {
                                                                                                            echo get_template_directory_uri(); ?>/assets/images/logo.svg <?php } ?>" alt="" />
                    </a>
                </div>
            <?php } else { ?>
                <div class="logo">
                    <span>
                        <img src="<?php if (is_singular('restaurant')) {
                                        echo get_template_directory_uri(); ?>/assets/images/rest-logo.svg<?php } else {
                                                                                                            echo get_template_directory_uri(); ?>/assets/images/logo.svg <?php } ?>" alt="" />
                    </span>
                </div>
            <?php } ?>
            <div class="menu-popup">
                <ul class="navigation header__nav_popup">
                    <?php
                    $args = array(
                        'menu' => 'top',
                        'theme_location' => 'top',
                        'container' => false,
                        'walker' => new main_service_mobile_menu_Walker,
                        'items_wrap' => '%3$s'
                    );
                    wp_nav_menu($args);
                    ?>
                </ul>
                <a href="" class="delivery-button delivery-button__popup">
                    Доставка
                </a>
                <div class="header__contacts contacts__popup">
                    <div class="contacts__number">
                        <div class="phone-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" />
                        </div>
                        <div class="number"><a class="number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">+<?php the_field('number', 'option'); ?></a></div>
                    </div>
                    <div>
                        <p class="contacts__text">Служба качества</p>
                    </div>
                </div>
            </div>

            <ul class="navigation header__nav">
                <?php
                $args = array(
                    'menu' => 'top',
                    'theme_location' => 'top',
                    'container' => false,
                    'walker' => new main_service_mobile_menu_Walker,
                    'items_wrap' => '%3$s'
                );
                wp_nav_menu($args);
                ?>
            </ul>

            <a href="" class="delivery-button <?php if (is_singular('restaurant')) {
                                                    echo 'rest_white border_white';
                                                } ?> ">Доставка</a>
            <div class="contacts">
                <div class="contacts__number">
                    <div class="phone-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" />
                    </div>
                    <div class="number"><a class="number <?php if (is_singular('restaurant')) {
                                                                echo 'rest_white';
                                                            } ?> " href="tel:+<?php the_field('link_appstore', 'option'); ?>">+<?php the_field('number', 'option'); ?></a></div>
                </div>
                <div>
                    <p class="contacts__text <?php if (is_singular('restaurant')) {
                                                    echo 'rest_white';
                                                } ?> ">Служба качества</p>
                </div>
            </div>

            <div class="menu__burger-icon">
                <div class="hamb__field" id="hamb">
                    <span class="bar <?php if (is_singular('restaurant')) {
                                            echo 'rest_white-bgc';
                                        } ?> "></span>
                    <span class="bar <?php if (is_singular('restaurant')) {
                                            echo 'rest_white-bgc';
                                        } ?> "></span>
                    <span class="bar <?php if (is_singular('restaurant')) {
                                            echo 'rest_white-bgc';
                                        } ?> "></span>
                </div>
            </div>
        </div>
        <div class="popup" id="popup"></div>
    </header>