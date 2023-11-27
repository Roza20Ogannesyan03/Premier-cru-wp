<?php
/*
Template Name: Контакты
*/
get_header(); ?>


<div class="container-large">
    <ul class="breadcrumb">

        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </ul>



    <h1 class="title">Контакты</h1>
    <div class="contacts__inner">
        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Отдел маркетинга:</p>
            <a class="contacts__inner_content" href="tel:+7 (8672) 405178">+7 (8672) 405178</a>
        </div>

        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Отдел кадров:</p>
            <a class="contacts__inner_content" href="tel:+7 (8672) 405179">+7 (8672) 405179</a>
        </div>

        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Отдел закупок:</p>
            <a class="contacts__inner_content" href="tel:+7 (8672) 402780">+7 (8672) 402780</a>
        </div>

        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Финансовый отдел:</p>
            <a class="contacts__inner_content" href="tel:+7 (8672) 405180">+7 (8672) 405180</a>
        </div>

        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Юридический отдел:</p>
            <a class="contacts__inner_content" href="tel:+7 (8672) 402780">+7 (8672) 402780</a>
        </div>


        <div class="contacts__inner_item">
            <p class="contacts__inner_text">Наша почта</p>
            <a class="contacts__inner_content" href="mailto:">premier-cru@gmail.com</a>
        </div>


    </div>

</div>
<div class="contacts-form-map">
    <div class="contacts__form">
        <form action="<?php echo get_template_directory_uri(); ?>/mailcontacts.php" method="post" onsubmit="return submitForm(this)">

            <h1 class="contacts__title">Форма обратной связи</h1>

            <input class="inputs" type="text" name="name-contacts" id="name-contacts" placeholder="Ваше имя">


            <input class="inputs" type="tel" name="number-contacts" id="number-contacts" placeholder="+7 (___) ___-__-__">


            <textarea name="message" id="message" class="inputs message" placeholder="Ваше сообщение"></textarea>

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
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9da30f81ed1ac3e78dc4f71d025a4e7b4774d360f5c8d75d6ff6673d82573fca&amp;width=100%25&amp;height=590&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LdxIR4pAAAAAADiYQOf2KEJ4pwj_d4gedjdD4GN"></script>

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
        var formData = new FormData(e);
        for (let formItem of e) {
            formData.append(formItem.name, formItem.value);
        }
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

        }

        request.open('POST', act, true);
        request.send(formData);
        return false;
    }
</script>
<?php get_footer(); ?>