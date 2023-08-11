<?php
get_header();
?>

<div class="background-img">
    <img style="width: 100%" src="<?php the_field('background-img'); ?>" alt="" />
</div>
<main>
    <div class="container">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <h1 class="title">События</h1>
        <div class="restaraunts">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>



                    <div class="all-events__item ww">
                        <a href="<?php the_permalink(); ?>">
                            <div class="item__img-container">

                                <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>


                            </div>

                            <a class="item__titles"><?php the_title(); ?></a>

                            <h5 class="item__subtitle"><?php the_excerpt(); ?></h5>
                        </a>
                    </div>

            <?php
                }
            } else {
                echo "<h2>Записей нет.</h2>";
            }
            ?>


        </div>
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