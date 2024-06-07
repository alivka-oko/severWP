<?php
get_header();
?>

<section class="section home p-56-0">
    <div class="ellipse ellipse-brown"></div>
    <div class="content">
        <div class="headline">
            <div class="left-side">
                <h1 class="headline-1 animate__animated animate__fadeInDown">Инновационная лесопромышленная компания</h1>
            </div>
            <div class="right-side">
                <p class="text-2">Используя передовые технологии и придерживаясь высоких экологических стандартов, компания обеспечивает сохранение окружающей среды через эффективные методы обработки леса.</p>
                <a href="#" class="button button-down animate__animated animate__fadeInDown"></a>
            </div>
        </div>

        <div class="catalog-banner animate__animated animate__fadeIn" style="background-image:url(<?php echo esc_url(get_theme_mod('main_catalog_image')); ?>)">
            <a href="#" class="button-long">Посмотреть полный каталог продукции</a>
        </div>
    </div>
    <div class="ellipse ellipse-blue"></div>
</section>
</div><!-- end header -->
<main class="main home">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            get_template_part('entry');
            comments_template();
        endwhile;
    endif;
    get_template_part('nav', 'below');
    get_footer();

    ?>