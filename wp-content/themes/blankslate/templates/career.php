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
        <div class="ellipse ellipse-brown"></div>
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= get_theme_mod('career_section_title') ?></h1>
                <p class="text-1"><?= text_br(get_theme_mod('career_section_desc_1')) ?></p>
                <?= button_brown('#modal-career', 'Откликнуться') ?>
            </div>
            <div class="right-side">
                <div class="medium-img" style="background: url('<?= get_theme_mod('career_section_img') ?>');">
                </div>
            </div>
            <p class="text-1 left-text"><?= text_br(get_theme_mod('career_section_desc_2')) ?></p>
            <p class="text-1 right-text"><?= text_br(get_theme_mod('career_section_desc_3')) ?></p>
        </div>
    </section>
    <?php
    $career = CFS()->get('career');
    if ($career): ?>
        <section class="section faqs p-0-140">
            <div class="ellipse ellipse-blue"></div>
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
                <?= miniBlock(get_theme_mod('career_section_miniblock')) ?>
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