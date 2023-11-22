<?php

remove_action('wp_head',             'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head'); // remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

// add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
add_filter('use_block_editor_for_post', '__return_false', 10);
add_theme_support('title-tag');

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');

function add_scripts_and_styles()
{

    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, 'footer');
    wp_enqueue_script('lightgallery', get_template_directory_uri() . '/assets/js/lightgallery.umd.js', array(), null, 'footer');
    wp_enqueue_script('lgthumbnail', get_template_directory_uri() . '/assets/js/lg-thumbnail.umd.js', array(), null, 'footer');
    wp_enqueue_script('lgzoom', get_template_directory_uri() . '/assets/js/lg-zoom.umd.js', array(), null, 'footer');
    wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), null, 'footer');


    wp_enqueue_style('lightgallerycss', get_template_directory_uri() . '/assets/css/lightgallery.css');
    wp_enqueue_style('lgzoomcss', get_template_directory_uri() . '/assets/css/lg-zoom.css');
    wp_enqueue_style('lgthumbnailcss', get_template_directory_uri() . '/assets/css/lg-thumbnail.css');

    wp_enqueue_style('style',  get_stylesheet_uri());
    wp_enqueue_style('animation', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_script('anim', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, 'footer');


    // wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    // wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    // wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    // wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');



    // if (is_page_template('templates/o-kompanii.php')) {
    //     wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), null, 'footer');
    //     wp_enqueue_style('slider1', get_template_directory_uri() . '/assets/css/slider1.css');
    //     wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css');
    //     wp_enqueue_style('about-us_slider', get_template_directory_uri() . '/assets/css/about-us_slider.css');
    // }

    // if (is_post_type_archive('restaurant')) {
    //     wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
    //     wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    // }

    // if (is_post_type_archive('event')) {
    //     wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
    //     wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css');
    // }

    // if (is_post_type_archive('command')) {
    //     wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');
    //     wp_enqueue_style('staff', get_template_directory_uri() . '/assets/css/staff.css');
    // }

    if (is_singular('restaurant')) {
        wp_enqueue_style('limonchello', get_template_directory_uri() . '/assets/css/limonchello.css');
        //wp_enqueue_style('restaurant', get_template_directory_uri() . '/assets/css/restaurant.css');

    }


    // if (is_front_page('front-page')) {

    //     wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), null, 'footer');
    //     wp_enqueue_style('slider1', get_template_directory_uri() . '/assets/css/slider1.css');
    //     wp_enqueue_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css');
    //     wp_enqueue_style('about-us_slider', get_template_directory_uri() . '/assets/css/about-us_slider.css');
    // }

    // if (is_singular('event')) {
    //     wp_enqueue_style('discount', get_template_directory_uri() . '/assets/css/discount.css');
    //     wp_enqueue_style('events', get_template_directory_uri() . '/assets/css/events.css', array('restaurant'));
    // }

    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/menu-burger.js', array(), null, 'footer');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, 'footer');
}

function add_menu()
{
    register_nav_menu('top', 'Меню в шапке сайта');
    register_nav_menu('bottom', 'Меню в подвале сайта');
}


if (function_exists('acf_add_options_page')) {

    $option_page = acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'     => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'     => 'edit_posts',
        'redirect'     => false
    ));
}

class main_service_mobile_menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {

        if ($depth == 0) {
            if ($args->has_children && $item->current) {
                $output .= '<li class="menu__item active"><a href="' . $item->url . '" class="menu__link">' . $item->title . '</a><span class="menu__item-svg-block" onclick="openMenu(this);"><svg class="menu__item-svg"><use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#arrowMenu"></use></svg></span>';
            } else if ($args->has_children) {
                $output .= '<li class="menu__item"><a href="' . $item->url . '" class="menu__link">' . $item->title . '</a><span class="menu__item-svg-block" onclick="openMenu(this);"><svg class="menu__item-svg"><use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#arrowMenu"></use></svg></span>';
            } else if ($item->current) {
                $output .= '<li class="menu__item active"><a href="' . $item->url . '" class="menu__link">' . $item->title . '</a>';
            } else {
                $output .= '<li class="menu__item"><a href="' . $item->url . '" class="menu__link">' . $item->title . '</a>';
            }
        }
        if ($depth == 1) {
            if ($item->current) {
                $output .= '<li class="menu__sub-item"><a href="' . $item->url . '" class="menu__sub-link menu__sub-link_active">' . $item->title . '</a>';
            } else {
                $output .= '<li class="menu__sub-item"><a href="' . $item->url . '" class="menu__sub-link">' . $item->title . '</a>';
            }
        }
    }
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="menu__sub">';
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '</ul>';
    }
    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {

        $id_field = $this->db_fields['id'];
        if (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

add_filter('wp_pagenavi', 'abeta_pagination', 10, 2);
function abeta_pagination($html)
{
    $out = '';
    $out = str_replace('<div', '', $html);

    $out = str_replace('class=\'wp-pagenavi\' role=\'navigation\'>', '', $out);
    $out = str_replace('<a', '<a class="pagination__page-item"', $out);
    $out = str_replace('</a>', '</a>', $out);
    $out = str_replace('<span aria-current=\'page\' class=\'current\'>', '<span class="pagination__page-item active">', $out);
    $out = str_replace('</div>', '', $out);
    $out = str_replace('?paged=', '', $out);
    return '<div class="pagination__page">' . $out . '</div>';
}

add_action('wp_ajax_loadmore_restaurants', 'loadmore_restaurants_action');
add_action('wp_ajax_nopriv_loadmore_restaurants', 'loadmore_restaurants_action');
function loadmore_restaurants_action()
{

    global $post;

    $args = [
        'post_type' => 'restaurant',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $_POST['page'] + 1,
    ];

    $post_query = new WP_Query($args);

?>
    <div class="row">
        <?php
        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
                $post_query->post;
        ?>
                <div class="all-events__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="item__img-container">

                            <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>

                            <div class="slide__sign">
                                <img class="slide__sign_img" src="<?php the_field('sign_img'); ?>" alt="" />
                            </div>


                        </div>

                        <a class="item__titles"><?php the_title(); ?></a>

                        <h5 class="item__subtitle"><?php the_excerpt(); ?></h5>
                    </a>
                </div>


        <?php

            }
        }
        ?>
    </div>
    <?php $max_pages = $post_query->max_num_pages;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $link = html_entity_decode(get_pagenum_link()); ?>
    <div class="pagi">
        <div class="more">
            <a href="#" class="more__btn loadmorerestaurants" data-pages="<?php echo $max_pages; ?>" data-page="<?php echo $paged; ?>" data-link="<?php echo $link; ?>">Показать ещё</a>
        </div>
        <?php $_SERVER['REQUEST_URI'] = 'restaurant/'; ?>
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $post_query));
        } ?>
    </div>

<?php
    wp_die();
}
if ($_SERVER['REQUEST_URI'] == '/restaurant') {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /restaurant/");
    exit();
}


add_action('wp_ajax_loadmore_events', 'loadmore_events_action');
add_action('wp_ajax_nopriv_loadmore_events', 'loadmore_events_action');
function loadmore_events_action()
{

    global $post;

    $args = [
        'post_type' => 'event',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $_POST['page'] + 1,
    ];

    $post_query = new WP_Query($args);

?>
    <div class="row">
        <?php
        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
                $post_query->post;
        ?>
                <div class="all-events__item ww">
                    <a href="<?php the_permalink(); ?>">
                        <div class="item__img-container">

                            <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>


                        </div>

                        <a class="item__titles"><?php the_title(); ?></a>

                        <h5 class="item__subtitle"><?php the_excerpt(); ?></h5>
                    </a>
                </div>


        <?php

            }
        }
        ?>
    </div>
    <?php $max_pages = $post_query->max_num_pages;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $link = html_entity_decode(get_pagenum_link()); ?>
    <div class="pagi">
        <div class="more">
            <a href="#" class="more__btn loadmoreevents" data-pages="<?php echo $max_pages; ?>" data-page="<?php echo $paged; ?>" data-link="<?php echo $link; ?>">Показать ещё</a>
        </div>
        <?php $_SERVER['REQUEST_URI'] = 'event/'; ?>
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $post_query));
        } ?>
    </div>
<?php
    wp_die();
}
if ($_SERVER['REQUEST_URI'] == '/event/page/') {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /event/");
    exit();
}
