<?php
get_header(); ?>
<main>

  <div class="background-img">
    <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
  </div>

  <div class="container-large">
    <div class="slider-swiper">


      <div class="swiper" id="rubl">
        <div class="container-large">
          <div class="slider-swiper__text">

            <h2 class="sale weight-700">Акции</h2>
            <div class="pagination-container">
              <div class="swiper-pagination"></div>

              <div class="arrows">
                <!-- If we need navigation buttons -->
                <div class="slider__swiper-button-prev">
                  <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/prevv.svg" alt="" />
                </div>
                <div class="slider__swiper-button-next">
                  <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/nextt.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-wrapper" id="lightgallery">


          <?php
          $delay = 0;
          $qwe = get_field('slider');

          foreach ($qwe as $row) {
          ?>

            <a href="<?= $row['slide_imgg']; ?>" class="slider__swiper-slide swiper-slide wow animated fadeInUp" data-wow-offset="200" data-wow-delay="<?php echo $delay; ?>s">
              <img src="<?= $row['slide_imgg']; ?>" alt="" />
            </a>

          <?php
            $delay += 0.2;
          }
          ?>


        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="about-us">
      <div class="about-us__text1  wow animated fadeInUp" data-wow-offset="200" data-wow-delay="0s">

        <p class="weight-700">Управляющая компания «Премьер КРЮ»</p>
        <p class="font-24">
          Надеемся, что наша работа облегчит Вам непростую задачу найти
          самое лучшее!
        </p>
      </div>

    </div>

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
                <img class="slide__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/mask.png" alt="" />
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
      <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/prevv.svg" alt="" />
    </div>
    <div class="about-us__swiper-button-next">
      <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/nextt.svg" alt="" />
    </div>
  </div>



  <div class="container-large">
    <div class="events">
      <div class="events__header">
        <h2 class="events__title">События</h2>
        <span class="events__line"></span>
        <a class="events__button" href="/event/">

          <p class="button__text">Все события</p>
          <div class="button__img-container">
            <img class="button__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt="" />
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
          <a href="<?php the_field('link_appstore', 'option'); ?>" class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".4s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store.svg" alt="" />
          </a>

          <a href="<?php the_field('link_googleplay', 'option'); ?>" class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".5s"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.svg" alt="" />
          </a>

        </div>

        <img class="app__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 55473.png" alt="" />
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

<script>
  // let slides = document.querySelectorAll(".slide__img");
  // let slidesCount = slides.length;
  // for (let i = 0; i < slidesCount; i++) {

  //   if (i % 4 === 0) {
  //     slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask1.svg";
  //   }
  //   if (i % 4 === 1) {
  //     slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask2.svg";
  //   }
  //   if (i % 4 === 2) {
  //     slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask3.svg";
  //   }
  //   if (i % 4 === 3) {
  //     slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask4.svg";
  //   }

  // }
</script>
<script type="text/javascript">
  lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail],
    licenseKey: 'your_license_key',
    speed: 500,
    // ... other settings
  });
</script>