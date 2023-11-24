<?php
get_header();
?>

<div class="background-img">
    <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.png" alt="" />
</div>
<main>
    <div class="container">
        <ul class="breadcrumb">




            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <h1 class="title">События</h1>

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'event',
            'posts_per_page' => 6,
            'paged' => $paged,
        ];
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) {
        ?>
            <div class="restaraunts">
                <div class="events__row" id="eventResponse">
                    <?php
                    while ($post_query->have_posts()) {
                        $post_query->the_post();
                        $post_query->post;
                    ?>

                        <div class="all-events__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="item__img-container">
                                    <div class="img-container"><svg data-v-9e081b70="" width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="stocks__button__icon">
                                            <path data-v-9e081b70="" d="M2.10374e-07 2.35836L7.4201 10L2.81232e-08 17.6416L2.28991 20L12 10L2.28991 2.73069e-08L2.10374e-07 2.35836Z" fill="#23262F"></path>
                                        </svg></div>

                                    <?php the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "item__img-container_img")); ?>


                                </div>

                                <a class="item__titles"><?php the_title(); ?></a>

                                <div class="item__subtitle"><?php the_excerpt(); ?></div>
                            </a>
                        </div>

                    <?php
                    } ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php } ?>
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
                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".4s">
                        <a href="<?php the_field('link_appstore', 'option'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store.svg" alt="" />
                        </a>
                    </button>

                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".5s">
                        <a href="<?php the_field('link_googleplay', 'option'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.svg" alt="" />
                        </a>
                    </button>
                </div>

                <img class="app__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 55473.png" alt="" />
            </div>
        </div>
    </div>
</main>
<script>
    var loadmoreEvents = document.querySelector(".loadmoreevents");
    console.log(loadmoreEvents);
    var currentPage = <?php echo $paged; ?>;
    var act = "/wp-admin/admin-ajax.php";
    var pageNext = loadmoreEvents.getAttribute("data-page");
    var pages = loadmoreEvents.getAttribute("data-pages");
    if (pageNext < pages) {
        pageNext++;
    }
    window.addEventListener("DOMContentLoaded", () => {
        if (currentPage == pageNext) {
            loadmoreEvents.remove();
        }
    });
    loadmoreEvents.addEventListener('click', (e) => {
        e.preventDefault();
        //console.log(e.target);
        //return;
        var link = loadmoreEvents.getAttribute('data-link') + "page/" + pageNext + "/";
        console.log(loadmoreEvents.getAttribute('data-link'));
        window.history.pushState("", "Title", link);
        loadmoreEvents.classList.add("disabled");
        const xhr = new XMLHttpRequest();
        const data = new FormData();
        data.append("action", "loadmore_events");
        data.append("page", currentPage);
        console.log(currentPage);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    loadmoreEvents.classList.remove("disabled");
                    let response = xhr.responseText;
                    let divResponse = document.createElement("div");
                    divResponse.innerHTML = xhr.responseText;
                    // console.log(divResponse);
                    // return;
                    let paginationResponse = divResponse.querySelector('.pagination__page');
                    let itemsResponse = divResponse.querySelectorAll('.all-events__item');
                    let parent = document.querySelector("#eventResponse");
                    let pagination = document.querySelector('.pagination__page');
                    if (response) {
                        itemsResponse.forEach((el) => {
                            parent.append(el);
                        });
                    }
                    pagination.replaceWith(paginationResponse);
                    if (pageNext == pages) {
                        loadmoreEvents.remove();
                        console.log(pageNext);
                    } else {
                        pageNext++;
                    }
                    currentPage++;
                } else {
                    console.log(
                        "An error occurred during your request: " +
                        xhr.status +
                        " " +
                        xhr.statusText
                    );
                }
            }
        };
        xhr.open("POST", act);
        xhr.send(data);
    });
</script>
<?php get_footer(); ?>