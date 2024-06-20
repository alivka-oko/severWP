<?php /* Template Name: Вакансии */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section p-0-140 career">
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= the_title() ?></h1>
                <p class="text-1">Мы стремимся привлечь профессионалов, которые разделяют наши ценности и видят своё
                    будущее развитие карьеры в сфере деревообработки. Наша команда стремится к построению
                    профессионального сообщества, где каждый сотрудник вносит свой вклад в общую цель.</p>
                <?= button_brown('#', 'Оставить заявку') ?>
            </div>
            <div class="right-side">
                <div class="medium-img"
                    style="background: url('https://gilfondrt.ru/wp-content/uploads/2023/01/yellow-white-helmet-safety-construction-site-min-scaled.jpg');">
                </div>
            </div>
            <p class="text-1 left-text">В связи с динамичным ростом и развитием нашей компании, мы активно ищем
                талантливых
                профессионалов. Собеседования проводятся как в формате онлайн через Zoom, так и очно в нашем офисе.
            </p>
            <p class="text-1 right-text">Для записи на собеседование направьте своё резюме на почту mail@north.com
                и мы обязательно рассмотрим Вашу кандидатуру.
            </p>
        </div>
    </section>
    <section class="section faqs p-0-140">
        <div class="content">
            <div class="accordion">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">
                    <label class="accordion__heading headline-3" for="accordion-heading-1">Какие виды
                        деревообрабатывающих услуг вы предоставляете? <span class="circle"></span></label>
                    <div class="accordion__content">
                        <p class="text-2">Наша компания предоставляет широкий спектр деревообрабатывающих услуг, включая
                            резку, строгание, фрезеровку и шлифовку древесины. Мы используем только высококачественные
                            материалы и современное оборудование для обработки древесины, гарантируя надежность и
                            долговечность наших изделий. Кроме того, мы имеем все необходимые сертификаты качества и
                            награды, подтверждающие нашу репутацию как надежного партнера в сфере деревообработки.</p>
                    </div>
                </section>

                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-2">
                    <label class="accordion__heading headline-3" for="accordion-heading-2">Какие виды
                        деревообрабатывающих услуг вы предоставляете?<span class="circle"></span></label>
                    <div class="accordion__content">
                        <p class="text-2">Наша компания предоставляет широкий спектр деревообрабатывающих услуг, включая
                            резку, строгание, фрезеровку и шлифовку древесины. Мы используем только высококачественные
                            материалы и современное оборудование для обработки древесины, гарантируя надежность и
                            долговечность наших изделий. Кроме того, мы имеем все необходимые сертификаты качества и
                            награды, подтверждающие нашу репутацию как надежного партнера в сфере деревообработки.</p>
                    </div>
                </section>

                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-3">
                    <label class="accordion__heading headline-3" for="accordion-heading-3">Какие виды
                        деревообрабатывающих услуг вы предоставляете?<span class="circle"></span></label>
                    <div class="accordion__content">
                        <p class="text-2">Наша компания предоставляет широкий спектр деревообрабатывающих услуг, включая
                            резку, строгание, фрезеровку и шлифовку древесины. Мы используем только высококачественные
                            материалы и современное оборудование для обработки древесины, гарантируя надежность и
                            долговечность наших изделий. Кроме того, мы имеем все необходимые сертификаты качества и
                            награды, подтверждающие нашу репутацию как надежного партнера в сфере деревообработки.</p>
                    </div>
                </section>

            </div>
            <div class="mini-block wow animate__animated animate__fadeInLeft"><span class="headline-3">></span><span
                    class="headline-2">50</span><span class="text-2">видов
                    деревьев</span></div>
        </div>
    </section>
    <section class="section uniq p-140">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <h3 class="headline-3">Стойкость</h3>
                    <p class="text-2">Деревья в Карельском лесу могут достигать возрастов, превышающих 500 лет</p>
                </div>
                <div class="card">
                    <h3 class="headline-3">Соответствие стандартам</h3>
                    <p class="text-2">Сертифицировано по стандартам FSC и PEFC, выращено и обработана с учетом
                        аспектов устойчивого лесоуправления</p>
                </div>
                <div class="card">
                    <h3 class="headline-3">Звукоизоляция</h3>
                    <p class="text-2">Древесина обладает звукоизоляционными свойствами, поглощая шум и создавая
                        комфортную акустическую обстановку</p>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>