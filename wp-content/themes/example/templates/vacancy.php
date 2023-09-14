<div class="PermalinkOverlay" id="permalink-overlay" style="display: block;">
    <?php
    /*
Template Name: Вакансии
*/
    get_header(); ?>

    <div class="container">
        <ul class="breadcrumb">

            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <h1 class="title">Вакансии</h1>
    </div>

    <div id="modal-callback" class="modal">
        <div class="rezume modal-content">
            <div class="close"><img class="vac__close_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt=""></div>
            <h1 class="rezume__title">Оставьте свой отклик на вакансию</h1>
            <form action="<?php echo get_template_directory_uri(); ?>/mail.php" method="post" class="rezume__form" name="rezume__form" onsubmit="return submitForm(this)" enctype="multipart/form-data">
                <label for="name">Введите ваше ФИО *</label>
                <input class="inputs" type="text" name="name" id="name" placeholder="Ваше ФИО">


                <label for="number">Введите ваш телефон *</label>
                <input class="inputs" type="tel" name="number" id="number" placeholder="+7 (___) ___-__-__">


                <label for="email">Введите ваш e-mail</label>
                <input class="inputs" type="email" name="email" id="email" placeholder="E-mail">


                <label for="drop_zone">Прикрепите ваше резюме *</label>
                <div class="dropZoneContainer">
                    <input type="file" id="drop_zone" name="drop_zone" class="FileUpload" accept=".jpg,.png,.gif" />
                    <div class="dropZoneOverlay">
                        <img class="rezumeIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/iconrezume.png" alt="">
                        <p class="dropZoneOverlay__text">Ваше резюме</p>
                    </div>
                </div>


                <input type="hidden" name="post" id="post">
                <input type="hidden" name="from" value="<?php echo get_permalink(); ?>">

                <button class="rezume__button">Оставить заявку</button>
                <label for="select" class="select">
                    <div class="checkbox-checked checked">
                        <input type="checkbox" name="select" id="select" class="checkbox" onclick="validate()" checked>
                        <div class="galochka"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_active.png" alt=""></div>
                    </div>
                    Соглашаюсь с условиями <a href="http://premier-cru/politika/">Политики конфиденциальности</a>
                </label>
                <div class="response"></div>
            </form>

        </div>
    </div>


    <div class="container">
        <div class="vacacy">
            <article class="vacancy__post">
                <h1 class="vacancy__title">
                    Официант
                </h1>
                <div>
                    <div class="vacancy__responsibility">
                        <p>
                        <p class="vacancy__requirements">Адрес: <strong class="bold">пр.Мира,1, 5 этаж, каб.517</strong><br></p>
                        <p class="vacancy__requirements">Образование: <strong class="bold">среднее</strong><br></p>
                        <p class="vacancy__requirements">Опыт работы:<strong class="bold"> на аналогичной должности 1 год</strong><br></p>
                        <p class="vacancy__requirements">Заработная плата:&nbsp;<strong class="bold">по результатам собеседования</strong><br></p>
                        <p class="vacancy__requirements">Занятость<strong class="bold">: полная</strong><br></p>
                        <p class="vacancy__requirements">Навыки: <strong class="bold">коммуникабельность, вежливость, обучаемость, стрессоустойчивость </strong><br></p>

                        <p class="vacancy__requirements">Дополнительная информация: <strong class="bold">на собеседовании</strong><br><br></p>
                        <button id="waiter" class="send waiter">Отправить резюме </button>

                        </p>
                    </div>
                </div>

            </article>
            <article class="vacancy__post">
                <h1 class="vacancy__title">
                    Администратор
                </h1>
                <div>
                    <div class="vacancy__responsibility">
                        <p>
                        <p class="vacancy__requirements">Адрес: <strong class="bold">пр.Мира,1, 5 этаж, каб.517</strong><br></p>
                        <p class="vacancy__requirements">Образование: <strong class="bold">высшее</strong><br></p>
                        <p class="vacancy__requirements">Опыт работы:<strong class="bold"> на аналогичной должности 1 год</strong><br></p>
                        <p class="vacancy__requirements"> Заработная плата:&nbsp;<strong class="bold">по результатам собеседования</strong><br></p>
                        <p class="vacancy__requirements"> Занятость<strong class="bold">: полная</strong><br></p>
                        <p class="vacancy__requirements">Навыки: <strong class="bold">опыт работы с персоналом, гостями, документацией</strong><br></p>
                        <p class="vacancy__requirements">Дополнительная информация: <strong class="bold">на собеседовании</strong><br><br></p>
                        <button id="admin" class="send admin">Отправить резюме </button>
                        </p>
                    </div>
                </div>
            </article>


            <article class="vacancy__post">
                <h1 class="vacancy__title">
                    Бармен
                </h1>
                <div>
                    <div class="vacancy__responsibility">
                        <p>
                        <p class="vacancy__requirements"> Адрес: <strong class="bold">пр.Мира,1, 5 этаж, каб.517</strong><br></p>
                        <p class="vacancy__requirements">Образование: <strong class="bold">среднее специальное</strong><br></p>
                        <p class="vacancy__requirements">Опыт работы: <strong class="bold">желателен опыт работы на аналогичной должности 1 год</strong><br></p>
                        <p class="vacancy__requirements">Заработная плата:&nbsp;<strong class="bold">по результатам собеседования</strong><br></p>
                        <p class="vacancy__requirements">Занятость<strong class="bold">: полная</strong><br></p>
                        <p class="vacancy__requirements"> Навыки: <strong class="bold">приготовление алкогольных и безалкогольных коктейлей, умение работать с кофемашиной</strong><br></p>
                        <p class="vacancy__requirements"> Дополнительная информация: <strong class="bold">на собеседовании</strong><br><br></p>
                        <button id="barmen" class="send barmen">Отправить резюме </button>
                        </p>
                    </div>
                </div>
            </article>




            <article class="vacancy__post">
                <h1 class="vacancy__title">
                    Повар
                </h1>
                <div>
                    <div class="vacancy__responsibility">
                        <p>
                        <p class="vacancy__requirements"> Адрес: <strong class="bold">пр.Мира,1, 5 этаж, каб.517</strong><br></p>
                        <p class="vacancy__requirements"> Образование: <strong class="bold">профильное</strong><br></p>
                        <p class="vacancy__requirements"> Опыт работы: <strong class="bold">опыт работы не менее 2-х лет</strong><br></p>
                        <p class="vacancy__requirements"> Заработная плата:&nbsp;<strong class="bold">по результатам собеседования</strong><br></p>
                        <p class="vacancy__requirements"> Занятость<strong class="bold">: полная</strong><br></p>
                        <p class="vacancy__requirements"> Навыки: <strong class="bold">опыт работы в приготовлении холодных и горячих блюд</strong><br></p>
                        <p class="vacancy__requirements">Дополнительная информация: <strong class="bold">на собеседовании</strong><br><br></p>
                        <button id="cook" class="send cook">Отправить резюме </button>
                        </p>
                    </div>
                </div>

            </article>

        </div>

        <div class="sout">
            <h1 class="sout__title">РЕЗУЛЬТАТЫ СОУТ</h1>
            <a class="sout__link" href="<?php echo get_template_directory_uri(); ?>/assets/perechen_vac.pdf">Перечень мероприятий</a>
            <a class="sout__link" href="<?php echo get_template_directory_uri(); ?>/assets/vedomost.pdf">Сводная ведомость результатов проведения специальной оценки условий труда</a>
        </div>
    </div>
    <div class="app">
        <div class="container">
            <div class="app__wrapper">
                <div class="app__text">
                    <div class="app__title wow animated fadeInUp" data-wow-offset="200" data-wow-delay="0s">Скачивайте приложение Premier CRU</div>
                    <div class="app__subtitle wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".2s">
                        Получите скидку до 25% по программе лояльности, только в
                        мобильном приложении Premier CRU!
                    </div>
                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".4s">
                        <a href="<?php the_field('link_appstore', 'option'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store.svg" alt="" />
                        </a>
                    </button>

                    <button class="download wow animated fadeInUp" data-wow-offset="200" data-wow-delay=".5s">
                        <a href="<?php the_field('link_googleplay', 'option'); ?>"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.svg" alt="" />
                        </a>
                    </button>
                </div>

                <img class="app__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 55473.png" alt="" />
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</div>

<script>
    const fileText = document.querySelector('.dropZoneOverlay__text');
    const fileIcon = document.querySelector('.rezumeIcon');

    document.getElementById('drop_zone').addEventListener('change', function() {
        if (this.value) {
            fileText.innerHTML = this.value.split('\\').pop().split('/').pop();
            fileIcon.src = "<?php echo get_template_directory_uri(); ?>/assets/images/iconrezumeLoad.png";
            console.log(fileIcon.src);
        } else {
            console.log("Файл не выбран");
        }
    });
    const checked = document.querySelector('.checkbox-checked');
    const checkbox = document.querySelector('.checkbox');

    function validate() {

        checked.classList.toggle('checked');

    }

    const rez = document.querySelector('.modal');
    const rezBtns = document.querySelectorAll('.send');
    const black = document.querySelector('.PermalinkOverlay');
    const hiddenInput = document.getElementById('post');
    rezBtns.forEach((btn) => {
        btn.addEventListener('click', function() {
            console.log('22222222222');
            rez.style.display = 'block';
            black.classList.add('black');

            if (btn.classList.contains('waiter')) {
                hiddenInput.value = 'Официант';
                console.log(hiddenInput.value);
            }
            if (btn.classList.contains('admin')) {
                hiddenInput.value = 'Администратор';
                console.log(hiddenInput.value);
            }
            if (btn.classList.contains('barmen')) {
                hiddenInput.value = 'Бармен';
                console.log(hiddenInput.value);
            }
            if (btn.classList.contains('cook')) {
                hiddenInput.value = 'Повар';
                console.log(hiddenInput.value);
            }
        });
    });

    const close = document.querySelector(".vac__close_img");
    close.addEventListener('click', function() {
        rez.style.display = 'none';
        black.classList.remove('black');
    });


    function submitForm(e) {
        var act = e.getAttribute("action");
        console.log(e);
        var file = e.querySelector('input[type=file]').files;
        var request = new XMLHttpRequest();
        var formData = new FormData();
        for (let formItem of e) {
            formData.append(formItem.name, formItem.value);
        }
        formData.append("file", file[0]);
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
                    fileText.innerHTML = "Ваше резюме";
                    console.log(file.innerHTML);
                    fileIcon.src = "<?php echo get_template_directory_uri(); ?>/assets/images/iconrezume.png";
                }
            }

        }

        request.send(formData);
        return false;
    }
</script>