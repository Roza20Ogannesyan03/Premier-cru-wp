<?php
/*
Template Name: О нас
*/
get_header(); ?>
<div class="background-img">
  <img style="width: 100%" src="images/background.png" alt="" />
</div>
<main>
  <div class="container">
    <h1 class="title">Наша команда</h1>

    <div class="staff">

      <?php
      $personal = get_field('personal');
      foreach ($personal as $item) {
      ?>


        <div class="staff__item">
          <div class="staff__item_container">
            <img src="<?= $item['personal_img']; ?>" alt="" class="staff__item_img" />
          </div>
          <h5 class="staff__item_name"><?= $item['personal_name']; ?></h5>
          <p class="staff__item_text"><?= $item['personal_text']; ?></p>
        </div>

      <?php
      }
      ?>



    </div>
  </div>
</main>

<?php get_footer(); ?>