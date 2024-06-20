<?php /* Template Name: Вопросы и ответы */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section p-0-140 fag-main">
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2">Вопросы и ответы</h1>
                <p class="text-1">Ниже расположены ответы на самые часто задаваемые вопросы. Если вы не нашли нужный
                    ответ, то нажмите кнопку задать вопрос и заполните форму или свяжитесь с нами по почте
                    mail@north.com или по телефону +7 499 841-84-00</p>
                <?= button_brown('#', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <div class="img"
                    style="background: url(<?php echo esc_url(get_theme_mod('quality_section_2_bg_image')); ?>);"></div>
            </div>
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

    <?php get_footer(); ?>