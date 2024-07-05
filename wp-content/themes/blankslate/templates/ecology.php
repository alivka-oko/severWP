<?php /* Template Name: Экологичность */ ?>
<?php get_header(); ?>
<main class="main eco">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section p-0-140 eco-1 wow animate__animated animate__fadeIn">
        <div class="ellipse ellipse-brown"></div>
        <div class="ellipse ellipse-blue"></div>
        <div class="content">
            <div class="top-content">
                <h1 class="headline-2"><?= get_theme_mod('ecology_panel_1_title') ?></h1>
                <p class="text-1 wow animate__animated animate__fadeInRight">
                    <?= text_br(get_theme_mod('ecology_panel_1_desc')) ?></p>
            </div>
            <div class="banner wow animate__animated animate__fadeInUp"
                style="background:url(<?= get_theme_mod('ecology_panel_1_image') ?>)"></div>
        </div>
    </section>
    <section class="section useful-initiatives p-0-140">
        <div class="content">
            <div class="left-side">
                <h2 class="headline-2  wow animate__ animate__fadeInUp animated" style="visibility: visible;">
                    <?= get_theme_mod('ecology_panel_2_title') ?>
                </h2>
                <div class="main-part">
                    <div class="medium-image"
                        style="background:url(<?= get_theme_mod('ecology_panel_2_left_image') ?>)"></div>
                    <div class="text-block wow animate__animated animate__fadeInLeft">
                        <h3 class="headline-3"> <?= get_theme_mod('ecology_panel_2_sub_title') ?> </h3>
                        <p class="text-1"><?= text_br(get_theme_mod('ecology_panel_2_desc')) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <?= miniBlock(get_theme_mod('ecology_panel_2_miniblock')) ?>
                <div class="large-image" style="background:url(<?= get_theme_mod('ecology_panel_2_right_image') ?>)">
                </div>
            </div>
        </div>
    </section>
    <section class="section care p-140" style="background: url(<?= get_theme_mod('ecology_panel_3_bg') ?>);">
        <div class="content">
            <div class="card  wow animate__animated animate__fadeInDown animated" style="visibility: visible;">
                <img src="http://sever/wp-content/uploads/2024/06/icon.svg" alt="логотип">
                <h2 class="headline-2 wow animate__animated animate__fadeIn" style="visibility: visible;">
                    <?= get_theme_mod('ecology_panel_3_title') ?>
                </h2>
                <p class="text-1"><?= text_br(get_theme_mod('ecology_panel_3_desc')) ?></p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>