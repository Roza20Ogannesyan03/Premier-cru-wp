<?php
get_header(); ?>

<div class="background-img">
    <img style="width: 100%" src="<?php the_field('background-img'); ?>" alt="" />
</div>
<main>
    <div class="container">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <h1 class="title">Рестораны</h1>


        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'restaurant',
            'posts_per_page' => 6,
            'paged' => $paged,
        ];
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) {
        ?>
            <div class="restaraunts">
                <div class="news__row" id="newsResponse">
                    <?php
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
                <a href="#" class="more__btn loadmorerestaurants" data-pages="<?php echo $max_pages; ?>" data-page="<?php echo $paged; ?>" data-link="<?php echo $link; ?>">Показать ещё</a>
            </div>
            <?php $_SERVER['REQUEST_URI'] = 'restaurant/'; ?>
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $post_query));
            } ?>
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
<script>
    var loadmoreNews = document.querySelector(".loadmorerestaurants");
    console.log(loadmoreNews);
    var currentPage = <?php echo $paged; ?>;
    var act = "/wp-admin/admin-ajax.php";
    var pageNext = loadmoreNews.getAttribute("data-page");
    var pages = loadmoreNews.getAttribute("data-pages");
    if (pageNext < pages) {
        pageNext++;
    }
    window.addEventListener("DOMContentLoaded", () => {
        if (currentPage == pageNext) {
            loadmoreNews.remove();
        }
    });
    loadmoreNews.addEventListener('click', (e) => {
        e.preventDefault();
        //console.log(e.target);
        //return;
        var link = loadmoreNews.getAttribute('data-link') + "page/" + pageNext + "/";
        console.log(loadmoreNews.getAttribute('data-link'));
        console.log(link);
        window.history.pushState("", "Title", link);
        loadmoreNews.classList.add("disabled");
        const xhr = new XMLHttpRequest();
        const data = new FormData();
        data.append("action", "loadmore_news");
        data.append("page", currentPage);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    loadmoreNews.classList.remove("disabled");
                    let response = xhr.responseText;
                    let divResponse = document.createElement("div");
                    divResponse.innerHTML = xhr.responseText;
                    // console.log(divResponse);
                    // return;
                    let paginationResponse = divResponse.querySelector('.pagination__page');
                    let itemsResponse = divResponse.querySelectorAll('.all-events__item');
                    let parent = document.querySelector("#newsResponse");
                    let pagination = document.querySelector('.pagination__page');
                    if (response) {
                        itemsResponse.forEach((el) => {
                            parent.append(el);
                        });
                    }
                    if (pageNext == pages) {
                        loadmoreNews.remove();
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