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
        <div class="ellipse ellipse-brown"></div>
        <div class="content">
            <div class="left-side wow animate__animated animate__fadeIn">
                <h1 class="headline-2"><?= the_title() ?></h1>
                <p class="text-1"><?= text_br(get_theme_mod('faq_desc')) ?></p>
                <?= button_brown('#modal-contact', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <div class="img" style="background: url(<?= get_theme_mod('faq_big_image') ?>);"></div>
            </div>
        </div>
    </section>

    <section class="section faqs p-0-140">
        <div class="ellipse ellipse-blue"></div>
        <div class="content">
            <?php
            $faqs = CFS()->get('faq');
            if ($faqs): ?>
                <div class="accordion">
                    <?php foreach ($faqs as $key => $faq): ?>
                        <section>
                            <input type="checkbox" class="accordion__checkbox" id="accordion-heading-<?= $key ?>">
                            <label class="accordion__heading headline-3"
                                for="accordion-heading-<?= $key ?>"><?= $faq['question'] ?> <span class="circle"></span></label>
                            <div class="accordion__content">
                                <p class="text-2"><?= $faq['answer'] ?></p>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?= miniBlock(get_theme_mod('faq_mini-block')) ?>
        </div>
    </section>

    <?php get_footer(); ?>