<?php /* Template Name: Документы */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section p-0-140 documents">
        <div class="content">
            <div class="headline">
                <h1 class="headline-2"><?= the_title() ?></h1>
            </div>
            <div class="main-content">
                <div class="accordion">
                    <section>
                        <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">
                        <label class="accordion__heading headline-3" for="accordion-heading-1">Какие виды
                            деревообрабатывающих услуг вы предоставляете? <span class="circle"></span></label>
                        <div class="accordion__content">
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>
                                Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                        </div>
                    </section>

                    <section>
                        <input type="checkbox" class="accordion__checkbox" id="accordion-heading-2">
                        <label class="accordion__heading headline-3" for="accordion-heading-2">Какие виды
                            деревообрабатывающих услуг вы предоставляете?<span class="circle"></span></label>
                        <div class="accordion__content">
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>
                                Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                        </div>
                    </section>

                    <section>
                        <input type="checkbox" class="accordion__checkbox" id="accordion-heading-3">
                        <label class="accordion__heading headline-3" for="accordion-heading-3">Какие виды
                            деревообрабатывающих услуг вы предоставляете?<span class="circle"></span></label>
                        <div class="accordion__content">
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>
                                Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                            <a href="#" target="_blank" class="accordion-doc text-1"><span
                                    class="ico-doc"><?= doc_icon() ?></span>Проектная декларация от
                                09.01.2024</a>
                        </div>
                    </section>
                </div>
                <div class="card-form">
                    <h3 class="headline-3">Нужна консультация?</h3>
                    <p class="text-2">Уточнить цену и другие параметры вы можете у наших менеджеров.</p>
                    <?= button_brown('#', 'Оставить заявку') ?>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>