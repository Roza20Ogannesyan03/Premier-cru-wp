<?php
/*
Template Name: О компании
*/
get_header(); ?>
<style>
    p {
        padding: 25px 0;
        line-height: 150%;
        word-wrap: break-word;
        color: #23262f;
    }
</style>
<div class="background-img">
    <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
</div>
<div class="container-large">
    <ul class="breadcrumb">

        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </ul>

</div>
<div class="container-small">
    <h1 class="title"><?php the_title(); ?></h1>



    <?php the_content(); ?>
</div>
<div class="company-rest">
    <div class="container">
        <h2 class="company-rest__title">Наши рестораны</h2>
    </div>
    <div class="swiper" id="kupol">

        <div class="swiper-wrapper">

            <?php
            $args = array(
                'post_type' => 'restaurant',
                'posts_per_page'    => -1
            );

            $query = new WP_Query($args);

            if (($query->have_posts())) {
                while ($query->have_posts()) {
                    $query->the_post();
                    if (has_post_thumbnail()) {
                        $thumbnail_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                        $thumbnail_url = $thumbnail_data[0];
                    }
            ?>
                    <a class="swiper-slide about-us__slide" href="<?php the_permalink(); ?>">
                        <?php if ($thumbnail_url) : ?>
                            <div class="about-us__slide_img" style="background-image: url('<?php echo $thumbnail_url ?>')" <?php post_class('about-us__slide_img'); ?>>
                                <img class="slide__img" src="" alt="" />
                            </div>
                        <?php endif; ?>
                        <div class="slide__sign">
                            <img class="slide__sign_img" src="<?= get_field('sign_img'); ?>" alt="" />
                        </div>
                    </a>

            <?php
                }
            }

            wp_reset_postdata();
            ?>


        </div>


        <div class="about-us__swiper-button-prev">
            <svg data-v-9e081b70="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
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
        <div class="about-us__swiper-button-next">
            <svg data-v-9e081b70="" width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#23262F"></path>
            </svg>
        </div>
    </div>
</div>

<script>
    let slides = document.querySelectorAll(".slide__img");
    let slidesCount = slides.length;
    for (let i = 0; i < slidesCount; i++) {

        if (i % 6 === 0) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask1.svg";
        }
        if (i % 6 === 1) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask2.svg";
        }
        if (i % 6 === 2) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask3.svg";
        }
        if (i % 6 === 3) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask4.svg";
        }
        if (i % 6 === 4) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask5.svg";
        }
        if (i % 6 === 5) {
            slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask6.svg";
        }


    }
</script>

<?php get_footer(); ?>