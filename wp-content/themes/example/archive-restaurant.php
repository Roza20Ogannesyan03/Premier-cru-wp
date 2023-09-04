<?php
get_header(); ?>

<div class="background-img">
    <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
</div>
<main>
    <div class="container">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <h1 class="title">Рестораны</h1>


        <?php
        $args = [
            'post_type' => 'restaurant',
            'posts_per_page' => -1,
            'paged' => $paged,
        ];
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) {
        ?>
            <div class="restaraunts">
                <div class="restaurants__row" id="restaurantsResponse">
                    <?php
                    while ($post_query->have_posts()) {
                        $post_query->the_post();
                        $post_query->post;
                    ?>

                        <div class="all-events__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="item__img-container">

                                    <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>

                                    <div class="slide__sign">
                                        <img class="slide__sign_img" src="<?php the_field('sign_img'); ?>" alt="" />
                                    </div>


                                </div>

                                <a class="item__titles"><?php the_title(); ?></a>

                                <h5 class="item__subtitle"><?php the_excerpt(); ?></h5>
                            </a>
                        </div>

                    <?php
                    } ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php } ?>

    </div>

    </div>

    <div class="app">
        <div class="container">
            <div class="app__wrapper">
                <div class="app__text">
                    <div class="app__title wow animated fadeInUp" data-wow-offset="200" data-wow-delay="0s">Скачивайте приложение Premier CRU</div>
                    <div class="app__subtitle wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".2s">
                        Получите скидку до 25% по программе лояльности, только в
                        мобильном приложении Premier CRU!
                    </div>
                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".4s">
                        <a href="<?php the_field('link_appstore', 'option'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store.svg" alt="" />
                        </a>
                    </button>

                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".5s">
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