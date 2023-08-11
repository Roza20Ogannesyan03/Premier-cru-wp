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
    <header class="header">
        <div class="header__container">
            <div class="logo"><a href="http://premier-cru"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" /></a></div>
            <div class="menu-popup">
                <?php
                wp_nav_menu([
                    'theme_location'  => 'top',
                    'container'       => false,
                    'menu_class' => 'navigation header__nav header__nav_popup',
                    'add_li_class'  => 'navigation_link'
                ]);
                ?>
                <button class="delivery-button delivery-button__popup">
                    Доставка
                </button>
                <div class="contacts contacts__popup">
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
            <?php
            wp_nav_menu([
                'theme_location'  => 'top',
                'container'       => false,
                'menu_class' => 'navigation header__nav',
                'add_li_class'  => 'navigation_link'
            ]);
            ?>

            <button class="delivery-button">Доставка</button>
            <div class="contacts">
                <div class="contacts__number">
                    <div class="phone-icon">
                        <img src="<?php the_field('phone'); ?>" alt="" />
                    </div>
                    <div class="number"><a class="number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">+<?php the_field('number', 'option'); ?></a></div>
                </div>
                <div>
                    <p class="contacts__text">Служба качества</p>
                </div>
            </div>

            <div class="menu__burger-icon">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
        <div class="popup" id="popup"></div>
    </header>