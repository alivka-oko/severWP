<?php get_header(); ?>
<main class="main single">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section headline">
        <div class="content">
            <h1 class="headline-2"><?= the_title() ?></h1>
        </div>
    </section>
    <section class="section main-content p-56-0">
        <div class="content l-r">
            <div class="left-side">
                <?php echo get_the_post_thumbnail(); ?>
                <p class="date text-2">28.10.2024</p>
                <div class="single-content"><?= the_content() ?></div>
            </div>
            <div class="right-side">
                <?= get_template_part('social') ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>