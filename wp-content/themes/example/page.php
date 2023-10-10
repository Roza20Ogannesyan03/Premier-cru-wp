<?php
get_header(); ?>
<style>
    p {
        padding: 25px 0;
        line-height: 150%;
        word-wrap: break-word;
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
</div>
<div class="container-small">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>