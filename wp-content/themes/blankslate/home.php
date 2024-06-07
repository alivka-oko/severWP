<?php
get_header();
?>
<main class="main home">
    <section class="section">
        <div class="content">
            <div class="headline">
                <div class="left-side">
                    <h1 class="headline-1">Инновационная лесопромышленная компания</h1>
                </div>
                <div class="right-side">
                    <p class="text-2">Используя передовые технологии и придерживаясь высоких экологических стандартов, компания обеспечивает сохранение окружающей среды через эффективные методы обработки леса.</p>
                    <a href="#" class="button button-down"></a>
                </div>
            </div>

            <div class="catalog-banner">
                <a href="#" class="button-long">Посмотреть полный каталог продукции</a>
            </div>
        </div>
    </section>
</main>

</div><!-- end header -->
<?php
if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('entry');
        comments_template();
    endwhile;
endif;
get_template_part('nav', 'below');
get_footer();
