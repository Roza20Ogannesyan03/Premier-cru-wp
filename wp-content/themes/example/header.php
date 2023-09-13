<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>

        <?php
        if (is_404()) {
            echo 'Ошибка 404';
        } else the_title();
        ?>
    </title>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <header class="header <?php if (is_singular('restaurant')) {
                                echo 'rest_white';
                            } ?> ">
        <div class="header__container <?php if (is_singular('restaurant')) {
                                            echo 'rest_white';
                                        } ?> ">
            <div class="logo"><a href="http://premier-cru.abetadev.beget.tech"><img src="<?php if (is_singular('restaurant')) {
                                                                                                echo get_template_directory_uri(); ?>/assets/images/rest-logo.svg<?php } else {
                                                                                                                                                                    echo get_template_directory_uri(); ?>/assets/images/logo.svg <?php } ?>" alt="" /></a></div>
            <div class="menu-popup">
                <div class="navigation header__nav_popup">
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
                </div>
                <button class="delivery-button delivery-button__popup">
                    Доставка
                </button>
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

            <div class="navigation header__nav">
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
            </div>

            <button class="delivery-button <?php if (is_singular('restaurant')) {
                                                echo 'rest_white border_white';
                                            } ?> ">Доставка</button>
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