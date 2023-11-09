<?php
get_header(); ?>
<main>

  <div class="background-img">
    <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
  </div>

  <div class="container-large">
    <div class="slider-swiper">


      <div class="swiper" id="rubl">
        <div class="slider-swiper__text">

          <h2 class="sale weight-700">Акции</h2>
          <div class="pagination-container">


            <div class="arrows">
              <!-- If we need navigation buttons -->
              <div class="slider__swiper-button-prev">
                <svg data-v-9e081b70="" width="20" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
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
              <!--xkxoHstw
                abetadev-->
              <div class="slider__swiper-button-next">
                <svg data-v-9e081b70="" width="12" height="14" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                  <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#23262F"></path>
                </svg>
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
              <div class="descr">
                <p class="zagolovok"><?= $row['zagolovok']; ?></p>
                <p class="akcii_tekst"><?= $row['akcii_tekst']; ?></p>
              </div>
              <div class="slide__img_container">
                <img src="<?= $row['slide_imgg']; ?>" alt="" />
              </div>
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



  <div class="container-large">
    <div class="events">
      <div class="events__header">
        <h2 class="events__title">События</h2>
        <span class="events__line"></span>
        <a class="events__button" href="/event/">

          <p class="button__text">Все события</p>
          <svg data-v-9e081b70="" width="12" height="12" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
            <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#777e90"></path>
          </svg>
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
                  <div class="img-container"> <svg data-v-9e081b70="" width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                      <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#23262F"></path>
                    </svg></div>
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
            Получите скидку до <?php the_field('skidka', 'option'); ?> по программе лояльности, только в
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
  let slides = document.querySelectorAll(".slide__img");
  let slidesCount = slides.length;
  for (let i = 0; i < slidesCount; i++) {

    if (i % 4 === 0) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask1.svg";
    }
    if (i % 4 === 1) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask2.svg";
    }
    if (i % 4 === 2) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask3.svg";
    }
    if (i % 4 === 3) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask4.svg";
    }
    if (i % 4 === 4) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask5.svg";
    }
    if (i % 4 === 5) {
      slides[i].src = "<?php echo get_template_directory_uri(); ?>/assets/images/mask6.svg";
    }


  }
</script>
<script type="text/javascript">
  lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail],
    licenseKey: 'your_license_key',
    speed: 500,
    // ... other settings
  });
</script>