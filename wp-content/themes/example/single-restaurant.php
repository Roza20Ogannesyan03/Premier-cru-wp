<?php
get_header(); ?>

<main>
    <div class="container">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
    </div>
    <div class="container-small">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>

    <div class="container">
        <div class="swiper" id="limonchello">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                $slides = get_field('slider_rest');
                foreach ($slides as $slide) {
                ?>

                    <div class="limonchello__slide swiper-slide">
                        <img class="slide__img" src="<?= $slide['slider_rest-img']; ?>" alt="" />
                    </div>

                <?php
                }
                ?>


            </div>
            <!-- If we need navigation buttons -->
            <div class="limonchello__swiper-button-prev">
                <img src="<?php the_field('left'); ?>" alt="" />
            </div>
            <div class="limonchello__swiper-button-next">
                <img src="<?php the_field('right'); ?>" alt="" />
            </div>
        </div>
    </div>

    <div class="container-small">
        <div class="inner__block2_text-748">
            <?php the_content(); ?>
        </div>
        <div class="inner">
            <div class="inner__block1">
                <div class="inner__block1_links">
                    <a class="underline" href=""><?php the_field('posmotret_menyu'); ?></a>
                    <a class="underline" href="tel:+7 8672 40 36 60"><?php the_field('number'); ?></a>
                    <a class="underline" href=""><?php the_field('3d_tour'); ?></a>
                </div>
                <div class="inner__block1_about-limochello">
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('kuhnya'); ?></h6>
                        <p class="about-limochello__item_text">
                            <?php the_field('kuhnya_text'); ?>
                        </p>
                    </div>
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('place_count'); ?></h6>
                        <p class="about-limochello__item_text"><?php the_field('count'); ?></p>
                    </div>
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('address'); ?></h6>
                        <p class="about-limochello__item_text">
                            <?php the_field('address_text'); ?>
                        </p>
                    </div>
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('srednij_chek'); ?></h6>
                        <p class="about-limochello__item_text"><?php the_field('price'); ?></p>
                    </div>
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('rezhim_raboty'); ?></h6>
                        <p class="about-limochello__item_text"><?php the_field('time_work'); ?></p>
                    </div>
                    <div class="about-limochello__item">
                        <h6 class="about-limochello__item_title"><?php the_field('service'); ?></h6>
                        <p class="about-limochello__item_text">
                            <?php the_field('service_text'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="inner__block2">
                <p class="inner__block2_text">
                    <?php the_content(); ?>
                </p>
                <div class="inner__block2_chef">
                    <div class="about-chef">
                        <p class="about-chef__lim"><?php the_field('shef_restorana'); ?></p>
                        <p class="about-chef__name"><?php the_field('chef_name'); ?></p>
                        <p class="about-chef__text">
                            <?php the_field('chef_text'); ?>
                        </p>
                    </div>
                    <div class="chef-img">
                        <img src="<?php the_field('chef_img'); ?>" alt="" />
                    </div>
                </div>
                <h2 class="events__title">События в <?php the_title(); ?></h2>

                <div class="inner__block2_events">
                    <?php

                    $post_objects = get_field('event');

                    if ($post_objects) : ?>
                        <div class="inner__block2_events">
                            <?php foreach ($post_objects as $post) : // Переменная должна быть названа обязательно $post (IMPORTANT) 
                            ?>
                                <?php setup_postdata($post); ?>


                                <div class="all-events__item" style="gap: 32px; margin: 0;">


                                    <div class="item__img-container">
                                        <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>
                                    </div>
                                    <h4 class="item__titles">
                                        <?php the_title(); ?>
                                    </h4>

                                </div>

                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде 
                        ?>
                    <?php endif;

                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af081c23bc31a05c83a58a85795c9eb024a9422b1772eb0bf2640c40b3d9bcf98&amp;width=100%25&amp;height=493&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
    <div class="app">
        <div class="container">
            <div class="app__wrapper">
                <div class="app__text">
                    <div class="app__title">Скачивайте приложение Premier CRU</div>
                    <div class="app__subtitle">
                        Получите скидку до 25% по программе лояльности, только в
                        мобильном приложении Premier CRU!
                    </div>
                    <button class="download">
                        <a href="<?php the_field('link_appstore', 'option'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store.svg" alt="" />
                        </a>
                    </button>

                    <button class="download">
                        <a href="<?php the_field('link_googleplay', 'option'); ?>"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.svg" alt="" />
                        </a>
                    </button>
                </div>

                <img class="app__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 55473.png" alt="" />
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>