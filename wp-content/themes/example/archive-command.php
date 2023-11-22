<?php
get_header(); ?>
<div class="background-img">
  <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
</div>
<main>
  <div class="container-large">
    <ul class="breadcrumb">

      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </ul>
    <h1 class="title">Наша команда</h1>

    <?php
    $args = [
      'post_type' => 'command',
      'posts_per_page' => -1,
      'paged' => $paged,
      'meta_key' => 'num',
      'orderby'  => 'meta_value',
      'order' => 'ASC',

    ];
    $post_query = new WP_Query($args);
    if ($post_query->have_posts()) {
    ?>
      <div class="staff" id="lightgallery">
        <?php
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $post_query->post;
          $s = get_the_post_thumbnail_url($post_query->ID, 'medium_large');
        ?>



          <a href="<?php echo $s; ?>">
            <div class=" staff__item">
              <div class="staff__item_container">
                <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "staff__item_img")); ?>
              </div>
              <h5 class="staff__item_name"><?php the_title(); ?></h5>
              <p class="staff__item_text"><?php the_excerpt(); ?></p>
            </div>
          </a>

        <?php
        } ?>
        <?php wp_reset_postdata(); ?>

      </div>
    <?php } ?>

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