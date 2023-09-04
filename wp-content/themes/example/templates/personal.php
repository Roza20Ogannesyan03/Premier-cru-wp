<?php
/*
Template Name: Наша команда
*/
get_header(); ?>
<div class="background-img">
  <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
</div>
<main>
  <div class="container">
    <h1 class="title">Наша команда</h1>

    <div class="staff" id="lightgallery">

      <?php
      $personal = get_field('personal');
      foreach ($personal as $item) {
      ?>

        <a href="<?= $item['personal_img']; ?>" data-lg-size="1600-2400" data-sub-html="<?= $item['personal_name']; ?>">
          <div class="staff__item">
            <div class="staff__item_container">
              <img src="<?= $item['personal_img']; ?>" alt="" class="staff__item_img" />
            </div>
            <h5 class="staff__item_name"><?= $item['personal_name']; ?></h5>
            <p class="staff__item_text"><?= $item['personal_text']; ?></p>
          </div>
        </a>
      <?php
      }
      ?>



    </div>
  </div>
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