<div class="swiper" id="limonchello">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
        $slides = get_field('slider_rest');
        if ($slides) {
            foreach ($slides as $slide) {
        ?>

                <div class="limonchello__slide swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt=""></div>
                    </a>
                    <img class="slide__img" src="<?= $slide['slider_rest-img']; ?>" alt="" />
                </div>

        <?php
            }
        }
        ?>


    </div>
    <!-- If we need navigation buttons -->
    <div class="limonchello__swiper-button-prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prevv.svg" alt="" />
    </div>
    <div class="limonchello__swiper-button-next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nextt.svg" alt="" />
    </div>
</div>