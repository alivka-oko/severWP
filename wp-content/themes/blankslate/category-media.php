<?php /* Template Name: Медиа */ ?>
<?php
get_header();
?>
<main class="main media">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section media-head p-20">
        <div class="content">
            <div class="headline">
                <h1 class="headline-2"><?= single_cat_title() ?></h1>
                <div class="text-1"><?= category_description() ?></div>
            </div>
    </section>
    <?php
    // Проверяем, есть ли посты
    if (have_posts()):
        ?>
        <section class="section media-articles">
            <div class="ellipse ellipse-brown"></div>
            <div class="content p-0-140">
                <div class="cards p-56">
                    <?php
                    while (have_posts()):
                        the_post();
                        ?>
                        <article class="card">
                            <a href="<?= the_permalink() ?>" class="card-image"
                                style="background: url('<?= get_the_post_thumbnail_url() ?>')"></a>
                            <a href="<?= the_permalink() ?>" class="card-text-block">
                                <h3 class="headline-3 card-title"><?= get_the_title() ?></h3>
                                <div class="text-1 card-description"><?= the_excerpt() ?></div>
                                <span class="text-2 card-date"><?= get_the_date('d.m') ?></span>
                            </a>
                        </article>
                        <?php
                    endwhile;
                    ?>
                    <?= get_template_part('social') ?>
                </div>
                <?php
                custom_pagination();
                ; ?>
            </div>
        </section>
        <?php
    endif; // Завершаем проверку наличия постов
    ?>
    <section class="section contact-form newsletter p-140-0"
        style="background: url(<?php echo esc_url(get_theme_mod('contact_form_image')); ?>);">
        <div class="content">
            <div class="text-block">
                <h2 class="headline-2 wow animate__animated animate__fadeIn">Будьте в курсе событий
                </h2>
            </div>
        </div>
        <div class="form-block">
            <?php echo do_shortcode('[contact-form-7 id="1f78916" title="Рассылка"]') ?>
            <div class="policy-agree">
                <p class="text-2">Нажимая на кнопку отправить, вы принимаете условия</p> <a href="#"
                    class="text-2 link">пользовательского соглашения</a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>