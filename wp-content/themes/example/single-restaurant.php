<?php
get_header(); ?>
<div class="rest-background">
    <?php
    $img = get_field('rest-img');
    if ($img) {
    ?>
        <img src="<?php the_field('rest-img'); ?>" alt="" />
    <?php
    }
    ?>
</div>
<main>

    <div class="rest-container">
        <div class="rest-title">
            <h1 class="title">Ресторан <?php the_title(); ?></h1>

            <div class="inner__block2_text">
                <?php the_content(); ?>
            </div>
            <div class="rest-buttons">
                <div class="rest-num rest-btn">
                    <a class="rest_white" href="tel:+7 8672 40 36 60"><?php the_field('number'); ?></a>
                </div>
                <div class="rest-menu rest-btn">
                    <a class="rest_white" href=""><?php the_field('posmotret_menyu'); ?></a>
                </div>
                <div class="rest-btn rest_white inner-btn " id="inner-btn">Подробнее</div>
            </div>
        </div>

        <div class="slider-wrraper">
            <div class="swiper" id="limonchello">
                <div class="swiper-wrapper" id="lightgallery">
                    <!-- Slides -->
                    <?php
                    $slides = get_field('slider_rest');
                    if ($slides) {
                        foreach ($slides as $slide) {
                    ?>

                            <a href="<?= $slide['slider_rest-img']; ?>" class="limonchello__slide swiper-slide">
                                <img class="slide__img" src="<?= $slide['slider_rest-img']; ?>" alt="" />
                            </a>
                    <?php
                        }
                    }
                    ?>


                </div>
                <!-- If we need navigation buttons -->

            </div>
            <div class="limonchello__swiper-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prevv.svg" alt="" />
            </div>
            <div class="limonchello__swiper-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nextt.svg" alt="" />
            </div>
        </div>
        <div class="container popup-content">
            <div class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt=""></div>
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
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af081c23bc31a05c83a58a85795c9eb024a9422b1772eb0bf2640c40b3d9bcf98&amp;width=100%25&amp;height=396&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
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
                </div>
            </div>



        </div>

    </div>

    <div class="popup-page" id="popup-page"></div>
</main>
<?php get_footer(); ?>

<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,

        // ... other settings
    });
</script>