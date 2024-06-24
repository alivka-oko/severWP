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
    <?php
    $career = CFS()->get('career');
    if ($career): ?>
        <section class="section faqs p-0-140">
            <div class="content">
                <div class="accordion">
                    <?php foreach ($career as $item): ?>
                        <section>
                            <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">
                            <label class="accordion__heading headline-3" for="accordion-heading-1"><?= $item['name'] ?> <span
                                    class="circle"></span></label>
                            <div class="accordion__content">
                                <p class="text-2"><?= $item['description'] ?></p>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </div>
                <div class="mini-block wow animate__animated animate__fadeInLeft"><span class="headline-3">></span><span
                        class="headline-2">50</span><span class="text-2">видов
                        деревьев</span></div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $cards = CFS()->get('cards');
    if ($cards): ?>
        <section class="section uniq p-140">
            <div class="content">
                <div class="cards">
                    <?php foreach ($cards as $item): ?>
                        <div class="card"> 
                            <h3 class="headline-3"><?= $item['title'] ?></h3>
                            <p class="text-2"><?= $item['description'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php get_footer(); ?>