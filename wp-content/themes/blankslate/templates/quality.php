<?php /* Template Name: Качество продукции */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section investment p-0-140">
        <div class="content">
            <div class="left-side">
                <h2 class="headline-2"><?= get_theme_mod('quality_section_1_title') ?></h2>
                <p class="text-1"><?= text_br(get_theme_mod('quality_section_1_desc')) ?></p>
                <div class="medium-image"
                    style="background: url(<?php echo esc_url(get_theme_mod('quality_section_1_medium_image')); ?>);">
                </div>
            </div>
            <div class="right-side">
                <div class="big-image"
                    style="background: url(<?php echo esc_url(get_theme_mod('quality_section_1_big_image')); ?>);">
                </div>
                <?= miniBlock(get_theme_mod('quality_section_1_block')) ?>
            </div>
        </div>
    </section>
    <section class="section specifications p-140"
        style="background: url(<?php echo esc_url(get_theme_mod('quality_section_2_bg_image')); ?>);">
        <div class="content">
            <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('quality_section_2_title') ?>
            </h2>
            <?php $specifications = CFS()->get('specifications');
            if ($specifications): ?>
                <div class="cards">
                    <?php foreach ($specifications as $item): ?>
                        <div class="card  wow animate__animated animate__fadeInDown">
                            <img src="<?= $item['icon'] ?>" class="card-ico" alt="Иконка">
                            <div class="separator"></div>
                            <h3 class="headline-3"> <?= $item['title'] ?></h3>
                            <p class="text-2"><?= $item['description'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="section uniq p-140">
        <div class="content">
            <div class="top-content">
                <h2 class="headline-2"><?= get_theme_mod('quality_section_3_title') ?></h2>
                <p class="text-1"><?= text_br(get_theme_mod('quality_section_3_desc')) ?></p>
            </div>
            <?php
            $cards = CFS()->get('cards');
            if ($cards): ?>
                <div class="bottom-content">
                    <div class="cards">
                        <?php foreach ($cards as $card): ?>
                            <div class="card">
                                <h3 class="headline-3"><?= $card['title'] ?></h3>
                                <p class="text-2"><?= $card['desc'] ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
    <?php
    get_footer();
    ?>