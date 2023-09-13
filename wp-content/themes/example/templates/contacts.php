<?php
/*
Template Name: Контакты
*/
get_header(); ?>


<div class="container">
    <ul class="breadcrumb">

        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </ul>
    <h1 class="title">Контакты</h1>
</div>


<div class="container">

    <div class="contacts-block">
        <div class="contacts__inner">
            <div class="contacts__inner_item">
                <p class="contacts__inner_text">Телефон</p>
                <a class="contacts__inner_content" href="tel:+<?php the_field('link_appstore', 'option'); ?>">+<?php the_field('number', 'option'); ?></a>
            </div>

            <div class="contacts__inner_item">
                <p class="contacts__inner_text">Адрес</p>
                <p class="contacts__inner_content">г. Владикавказ, пр. Мира, 45</p>
            </div>

            <div class="contacts__inner_item">
                <p class="contacts__inner_text">Наша почта</p>
                <a class="contacts__inner_content" href="mailto:">premier-cru@gmail.com</a>
            </div>

            <div class="contacts__inner_item">
                <p class="contacts__inner_text">Мы в соц. сетях</p>
                <div class="contacts_network">
                    <a href="<?php the_field('link_instagram', 'option'); ?>"><img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-contacts.png" alt="" /></a>
                    <a href="<?php the_field('link_facebook', 'option'); ?>"><img class="contacts__fb" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png" alt="" /></a>
                    <a href="<?php the_field('link_vk', 'option'); ?>"><img class="contacts__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk-contacts.png" alt="" /></a>
                </div>
            </div>
        </div>
        <form action="<?php get_template_directory_uri(); ?>/mailcontacts.php" method="post" class="contacts__form" name="contacts__form" onsubmit="return submitForm(this)" enctype="multipart/form-data">
            <?

            var_dump(get_template_directory_uri() . "/mail-contacts.php");

            ?>
            <label for="name">Ваше имя *</label>
            <input class="inputs" type="text" name="name-contacts" id="name-contacts" placeholder="Ваше имя">


            <label for="number">Ваш телефон *</label>
            <input class="inputs" type="tel" name="number-contacts" id="number-contacts" placeholder="+7 (___) ___-__-__">


            <label for="message" class="textarea-cont">Ваше сообщение</label>
            <textarea name="message" id="message" class="inputs message"></textarea>

            <label for="select" class="select">
                <div class="checkbox-checked checked">
                    <input type="checkbox" name="select" id="select" class="checkbox" onclick="validate()" checked>
                    <div class="galochka"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_active.png" alt=""></div>
                </div>
                Нажимая кнопку «Отправить», я даю согласие на обработку моих персональных данных
            </label>
            <button class="contacts__button">Отправить</button>
            <div class="response"></div>
        </form>
    </div>
    <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af081c23bc31a05c83a58a85795c9eb024a9422b1772eb0bf2640c40b3d9bcf98&amp;width=100%25&amp;height=396&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>

<script>
    const checked = document.querySelector('.checkbox-checked');
    const checkbox = document.querySelector('.checkbox');

    function validate() {
        checked.classList.toggle('checked');
    }

    function submitForm(e) {
        var act = e.getAttribute("action");
        console.log(e);
        var request = new XMLHttpRequest();
        var formData = new FormData();
        for (let formItem of e) {
            formData.append(formItem.name, formItem.value);
        }
        request.open('POST', act, true);
        request.onreadystatechange = function() {
            if (request.readyState === 4) {
                if (request.status === 422) {
                    e.querySelector('.response').innerHTML = request.response;
                    let inputs = e.querySelectorAll('input, select, textarea');
                    inputs.forEach(el => {
                        el.addEventListener('input', () => {
                            el.removeAttribute("style");
                            el.classList.remove('error');
                        });
                    });
                    let errors = e.querySelector('.response').querySelectorAll("[data-error]");
                    console.log(errors);
                    errors.forEach(el => {
                        let dataAt = el.getAttribute("data-error");
                        let input = e.querySelector("input[name=" + dataAt + "], select[name=" + dataAt + "], textarea[name=" + dataAt + "]");
                        input.style.borderColor = "#da4c4c";
                        input.classList.add('error');
                        // console.log(input);
                    });
                } else {
                    e.querySelector('.response').innerHTML = request.response;
                    e.reset();
                }

            }

            request.send(formData);
            return false;
        }
    }
</script>
<?php get_footer(); ?>