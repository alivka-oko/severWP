<?php /* Template Name: Каталог */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section catalog-main">
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= single_cat_title() ?></h1>
                <div class="text-1"><?= text_br(category_description()) ?></div>
                <?= button_brown('#', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <?php if (function_exists('z_taxonomy_image'))
                    z_taxonomy_image(); ?>
            </div>
        </div>
    </section>
    <?php
    // Проверяем, есть ли посты
    if (have_posts()):
        ?>
        <section class="section catalog-products p-0-140">
            <div class="content">
                <div class="cards p-56">
                    <?php
                    while (have_posts()):
                        the_post();
                        ?>
                        <a href="<?= the_permalink() ?>" class="card"
                            style="background:url('<?= get_the_post_thumbnail_url() ?>')">
                            <?= button_long('', get_the_title()) ?>
                        </a>
                        <?php
                    endwhile;
                    ?>
                    <?= get_template_part('consultation') ?>
                </div>
            </div>
        </section>
        <?php
    endif; // Завершаем проверку наличия постов
    ?>

    <section class="section contact-form p-140-0"
        style="background: url(<?php echo esc_url(get_theme_mod('contact_form_image2')); ?>);">
        <div class="content">
            <div class="text-block">
                <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('contact_form_title') ?>
                </h2>
                <p class="text-1"><?= get_theme_mod('contact_form_description') ?></p>
            </div>
        </div>
        <div class="form-block">
            <?php echo do_shortcode('[contact-form-7 id="383ebcb" title="Contact form 1"]') ?>
            <div class="policy-agree">
                <p class="text-2">Нажимая на кнопку отправить, вы принимаете условия</p> <a href="#"
                    class="text-2 link">пользовательского соглашения</a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>