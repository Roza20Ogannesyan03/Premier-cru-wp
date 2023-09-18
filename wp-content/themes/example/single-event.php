<?php
get_header(); ?>

<main>
    <div class="container-large">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>

    </div>
    <div class="background-img">
        <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
    </div>
    <div class="container-small">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="discount-img-container">
            <?php
            $img = get_field('discount_img');
            if ($img) {
            ?>
                <img src="<?= $img ?>" alt="<?php the_title(); ?>" class="discount-img" />
            <?php
            }
            ?>
        </div>
        <div class="discount-text">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="container-small">
        <div class="events">
            <div class="events__header">
                <h2 class="events__title">другие события</h2>
                <span class="events__line"></span>
                <a class="events__button" href="/event/">

                    <p class="button__text">Все события</p>
                    <div class="button__img-container">
                        <img class="button__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt="arrow" />
                    </div>
                </a>
            </div>
            <div class="all-events">

                <?php
                $args = array(
                    'post_type' => 'event',
                    'posts_per_page'    => 6
                );
                $delay = 0;
                $query = new WP_Query($args);
                if (($query->have_posts())) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="all-events__item randomly wow animated fadeInUp" data-wow-offset="200" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="item__img-container">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-arrow.svg" alt=""></div>
                                </a>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>
                                </a>
                            </div>
                            <h4> <a class=" item__titles" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <h5><a class="item__subtitle" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h5>

                        </div>
                <?php
                        $delay += 0.1;
                    }
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>

    </div>
    <div class="app">
        <div class="container">
            <div class="app__wrapper">
                <div class="app__text">
                    <div class="app__title wow animated fadeInUp" data-wow-offset="200" data-wow-delay="0s">Скачивайте приложение Premier CRU</div>
                    <div class="app__subtitle wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".2s">
                        Получите скидку до 15% по программе лояльности, только в
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