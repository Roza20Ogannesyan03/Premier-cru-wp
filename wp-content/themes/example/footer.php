<footer class="footer">
  <div class="footer__container">
    <div class="block1">
      <div class="block1__logo">
        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="" />
        </div>
        <p class="white footer__logo_subtitle">
          Управляющая компания «Премьер КРЮ»
        </p>
      </div>

      <?php
      wp_nav_menu([
        'theme_location'  => 'top',
        'container'       => false,
        'menu_class' => 'navigation footer__nav',
        'add_li_class'  => 'footer__nav_link',
      ]);
      ?>


      <div class="footer__contacts">
        <div class="footer__number"><a class="footer__number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">Служба качества +<?php the_field('number', 'option'); ?></a></div>
        <div class="soc-net">
          <a href="<?php the_field('link_instagram', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="" /></a>
          <a href="<?php the_field('link_facebook', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="" /></a>
          <a href="<?php the_field('link_vk', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk.png" alt="" /></a>
        </div>
      </div>
    </div>

    <span class="footer__line"></span>
    <div class="block2-1024">
      <div class="block2">
        <p class="white block2__font-1024">
          Процедура заказа в мобильном приложении
        </p>
        <p class="white block2__font-1024">Политика конфиденциальности</p>
        <p class="white block2__font-1024">Разработка сайта - ABETA</p>
      </div>
      <div class="footer__contacts-1024">
        <div class="footer__number"><a class="footer__number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">Служба качества <?php the_field('number', 'option'); ?></a></div>
        <div class="soc-net">
          <a href="<?php the_field('link_instagram', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="" /></a>
          <a href="<?php the_field('link_facebook', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="" /></a>
          <a href="<?php the_field('link_vk', 'option'); ?>"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>