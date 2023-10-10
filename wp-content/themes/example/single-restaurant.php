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
            <h1 class="title"><?php the_title(); ?></h1>

            <div class="inner__block2_text">
                <?php the_content(); ?>
            </div>
            <div class="rest-buttons">
                <div class="rest-num rest-btn">
                    <a class="rest_white" href="tel:+7 8672 40 36 60"><?php the_field('number'); ?></a>
                </div>
                <div class="rest-menu rest-btn">
                    <a class="rest_white" href="<?php the_field('menyu'); ?>"><?php the_field('posmotret_menyu'); ?></a>
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
                <svg data-v-9e081b70="" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                    <g data-v-9e081b70="" clip-path="url(#clip0_1836_1028)">
                        <path data-v-9e081b70="" d="M16 17.6416L8.5799 10L16 2.35836L13.7101 -1.00095e-07L4 10L13.7101 20L16 17.6416Z" fill="#23262F"></path>
                    </g>
                    <defs data-v-9e081b70="">
                        <clipPath data-v-9e081b70="" id="clip0_1836_1028">
                            <rect data-v-9e081b70="" width="20" height="20" fill="white" transform="translate(20) rotate(90)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="limonchello__swiper-button-next">
                <svg data-v-9e081b70="" width="16" height="16" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                    <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#23262F"></path>
                </svg>
            </div>
        </div>
        <div class="container popup-content">
            <div class="close-popup"><img class="close__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt=""></div>
            <div class="inner">
                <div class="inner__block1">
                    <div class="inner__block1_links">
                        <a class="underline" href="<?php the_field('menyu'); ?>"><?php the_field('posmotret_menyu'); ?></a>
                        <a class="underline" href="tel:<?php the_field('number'); ?>"><?php the_field('number'); ?></a>
                        <a class="underline" href="<?php echo get_template_directory_uri() . get_field('3d_tur_link'); ?>"><?php the_field('3d_tour'); ?></a>
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
                    <div class="map" id="map">
                        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af081c23bc31a05c83a58a85795c9eb024a9422b1772eb0bf2640c40b3d9bcf98&amp;width=100%25&amp;height=396&amp;lang=ru_RU&amp;scroll=true"></script> -->
                    </div>
                    <?php
                    $shef = get_field('shef');
                    if ($shef) {
                    ?>
                        <div class="inner__block2_chef">
                            <div class="about-chef">


                                <p class="about-chef__lim">Шеф повар ресторана <?php the_title(); ?></p>
                                <?php

                                if ($shef) : ?>
                                    <div class="about-chef__name"><?php echo esc_html($shef->post_title); ?></div>
                                <?php endif; ?>
                                <?php if ($shef) : ?>
                                    <p class="about-chef__text"><?php echo wp_strip_all_tags(esc_html($shef->post_content)); ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="chef-img_cont">
                                <?php
                                if ($shef) : ?>
                                    <?php echo get_the_post_thumbnail($shef->ID, 'medium'); ?>
                                <?php endif; ?>

                            </div>


                        </div>
                    <?php } ?>
                </div>
            </div>



        </div>

    </div>

    <div class="popup-page" id="popup-page"></div>
</main>

<?php get_footer(); ?>

<!-- <script src="https://api-maps.yandex.ru/2.0-stable/?apikey=84112ee6-39c5-4400-b576-01e91a82a877
&?apikey=84112ee6-39c5-4400-b576-01e91a82a877
&load=package.standard&lang=ru-RU"></script> -->

<script src="https://api-maps.yandex.ru/2.1/?apikey=84112ee6-39c5-4400-b576-01e91a82a877&lang=ru_RU" type="text/javascript">
</script>


<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,

        // ... other settings
    });

    function init() {
        let map = new ymaps.Map("map", {
            center: [<? the_field(('shirota')); ?>, <? the_field(('dolgota')); ?>], // ваши данные
            zoom: 18,


        });
        let placemark = new ymaps.Placemark(
            [<? the_field(('shirota')); ?>, <? the_field(('dolgota')); ?>], {
                balloonContent: `
      <div class="balloon">
        <div class="balloon__address"><?php the_field('address_text'); ?></div>
      </div>
    `,
            }, {
                iconLayout: "default#image",
                iconImageHref: "<?php echo get_template_directory_uri(); ?>/assets/images/maps.png",
                iconImageSize: [56, 56],
                //iconImageOffset: [-25, -50],
            }
        );
        map.controls.remove("searchControl");
        map.geoObjects.add(placemark);
    }

    ymaps.ready(init);
</script>