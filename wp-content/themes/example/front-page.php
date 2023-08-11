<?php
get_header(); ?>
<main>
  <div class="slider-swiper">


    <div class="swiper" id="rubl">
      <div class="container">
        <div class="slider-swiper__text">
          <div class="pagination-container">
            <div class="swiper-pagination"></div>

            <div class="arrows">
              <!-- If we need navigation buttons -->
              <div class="slider__swiper-button-prev">
                <img class="arrow" src="<?php the_field('left') ?>" alt="" />
              </div>
              <div class="slider__swiper-button-next">
                <img class="arrow" src="<?php the_field('right') ?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-wrapper">
        <?php
        $loop_slider = get_field('slider');

        foreach ($loop_slider as $row) {
        ?>

          <div class="slider__swiper-slide swiper-slide">
            <div class="descr">
              <p class="weight-700"><?= $row['slide_title']; ?></p>
              <p><?= $row['slide_text']; ?></p>
            </div>
            <img src="<?= $row['slide_img']; ?>" alt="" />
          </div>

        <?php
        }
        ?>


      </div>
    </div>
  </div>
  <div class="background-img">
    <img style="width: 100%" src="<?php the_field('background-img') ?>" alt="" />
  </div>
  <div class="container">
    <div class="about-us">
      <div class="about-us__text1">
        <p class="about-us__title">о нас</p>
        <div class="about-us__info">
          <p class="weight-700">Управляющая компания «Премьер КРЮ»</p>
          <p class="font-24">
            Надеемся, что наша работа облегчит Вам непростую задачу найти
            самое лучшее!
          </p>
        </div>
      </div>
      <div class="about-us__text2">
        <p>
          Таким образом укрепление и развитие структуры влечет за собой
          процесс внедрения и модернизации новых предложений. Задача
          организации, в особенности же новая модель организационной
          деятельности позволяет оценить значение дальнейших направлений
          развития.
        </p>
      </div>
    </div>

    <div class="wrapper">
      <div class="about-us-numbers">
        <div class="about-us__block1 block">
          <p class="about-us-numbers_p">11</p>
          <span></span>
          <div class="block__text">
            <p class="about__title">Заведений во Владикавказе</p>
            <p class="description">
              We realize ideas from simple to complex, everything becomes
              easy to use and reach the most potential customers.
            </p>
          </div>
        </div>
        <div class="about-us__block2 block">
          <p class="about-us-numbers_p">2002</p>
          <span></span>
          <div class="block__text">
            <p class="about__title">Год основания</p>
            <p class="description">
              We realize ideas from simple to complex, everything becomes
              easy to use and reach the most potential customers.
            </p>
          </div>
        </div>

        <div class="about-us__block3 block">
          <p class="about-us-numbers_p">320</p>
          <span></span>
          <div class="block__text">
            <p class="about__title">Опытных сотрудников</p>
            <p class="description">
              We realize ideas from simple to complex, everything becomes
              easy to use and reach the most potential customers.
            </p>
          </div>
        </div>
        <div class="about-us__block4 block">
          <p class="about-us-numbers_p">845</p>
          <span></span>
          <div class="block__text">
            <p class="about__title">Приготовленных блюд в день</p>
            <p class="description">
              We realize ideas from simple to complex, everything becomes
              easy to use and reach the most potential customers.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="swiper" id="kupol">
    <div class="swiper-wrapper">

      <?php
      $loop_about = get_field('slider_about');

      foreach ($loop_about as $row) {
      ?>

        <div class="swiper-slide about-us__slide">
          <img class="slide__img" src="<?= $row['about_img']; ?>" alt="" />
          <div class="slide__sign">
            <img class="slide__sign_img" src="<?= $row['about_sign']; ?>" alt="" />
          </div>
        </div>

      <?php
      }
      ?>



    </div>

    <div class="about-us__swiper-button-prev">
      <img class="arrow" src="<?php the_field('left') ?>" alt="" />
    </div>
    <div class="about-us__swiper-button-next">
      <img class="arrow" src="<?php the_field('right') ?>" alt="" />
    </div>
  </div>
  <div class="container-small">
    <div class="events">
      <div class="events__header">
        <h2 class="events__title">События</h2>
        <span class="events__line"></span>
        <a class="events__button" href="http://premier-cru/event">

          <p class="button__text">Все события</p>
          <div class="img-container">
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
        $query = new WP_Query($args);
        if (($query->have_posts())) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="all-events__item randomly">
              <div class="item__img-container">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>
                </a>
              </div>
              <h4> <a class=" item__titles" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <h5><a class="item__subtitle" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h5>
            </div>
        <?php
          }
        }
        ?>

      </div>
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