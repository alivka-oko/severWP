<?php /* Template Name: Главная */ ?>
<?php
get_header();
?>

<section class="section section-home p-56-0">
    <div class="ellipse ellipse-brown"></div>
    <div class="content">
        <div class="headline">
            <div class="left-side">
                <h1 class="headline-1 wow animate__animated animate__fadeIn">Инновационная лесопромышленная компания</h1>
            </div>
            <div class="right-side">
                <p class="text-2">Используя передовые технологии и придерживаясь высоких экологических стандартов, компания обеспечивает сохранение окружающей среды через эффективные методы обработки леса.</p>
                <a href="#footer" class="button button-down animate__animated animate__fadeInDown"><svg viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 0V24.5M11.5 24.5L22 14M11.5 24.5L1 14" stroke="#394645" stroke-width="2" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="catalog-banner  wow animate__animated animate__zoomIn" style="background-image:url(<?php echo esc_url(get_theme_mod('main_catalog_image')); ?>)">
            <?= button_long('#', 'Посмотреть полный каталог продукции ') ?>
        </div>
    </div>
</section>
<div class="ellipse ellipse-blue"></div>
</div><!-- end header -->
<main class="main">
    <section class="section about p-140">
        <div class="content">
            <div class="left-side">
                <div class="headline">
                    <h2 class="headline-2 wow animate__animated animate__fadeIn">о компании</h2>
                    <p class="text-1 wow animate__animated animate__fadeIn">Северный Стандарт — уникальный лесопромышленный холдинг с полным циклом собственной лесозаготовки и специализацией на производстве широкого ассортимента продукции. <br><br>
                        В фокусе развития — экологичные технологии комплексной переработки древесного сырья и максимально эффективное использование ресурсов.</p>
                </div>
                <div class="about_medium_image wow animate__animated animate__fadeInUp" style="background:url('<?= get_theme_mod('about_medium_image'); ?>')"></div>
            </div>
            <div class="right-side">
                <div class="about_large_image wow animate__animated animate__fadeInRight" style="background:url('<?= get_theme_mod('about_large_image'); ?>')"></div>
                <div class="image-item">
                    <div class="about_small_image" style="background:url('<?= get_theme_mod('about_small_image'); ?>')"></div>
                    <div class="mini-block wow animate__animated animate__fadeInRight"><span class="headline-2">12+</span><span class="text-2">стран продукции</span></div>
                </div>
            </div>
        </div>
        <div class="ellipse ellipse-brown"></div>
    </section>
    <section class="section features p-140" style="background: url(<?php echo esc_url(get_theme_mod('features_bg')); ?>);">
        <div class="content">
            <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('features_title') ?></h2>
            <?php $features = CFS()->get('features');
            if ($features) : ?>
                <div class="cards">
                    <?php foreach ($features as $item) : ?>
                        <div class="card  wow animate__animated animate__fadeInDown">
                            <img src="<?= $item['icon'] ?>" class="card-ico" alt="Иконка">
                            <div class="separator"></div>
                            <h3 class="headline-3"> <?= $item['title'] ?></h3>
                            <p class="text-2"><?= $item['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="section best-quality p-140">
        <div class="content">
            <div class="top-content">
                <div class="left-side">
                    <h2 class="headline-2"><?= get_theme_mod('best_quality_title') ?></h2>
                    <div class="words">
                        <p class="headline-3"><?= get_theme_mod('best_quality_word1') ?></p>
                        <p class="headline-3"><?= get_theme_mod('best_quality_word3') ?></p>
                        <p class="headline-3"><?= get_theme_mod('best_quality_word2') ?></p>
                        <?= button_brown('#', 'Подробнее') ?>
                    </div>
                </div>
                <div class="right-side">
                    <p class="text-1"><?= text_br(get_theme_mod('best_quality_text_right', '')); ?>
                    </p>
                </div>
            </div>
            <video id="my-video" class="video-js" controls preload="auto" data-setup="{}">
                <source src="<?= video_url(get_theme_mod('best_quality_video')) ?>" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
    </section>
    <section class="section base-products p-0-140">
        <div class="content">
            <div class="top-content">
                <div class="left-side">
                    <h2 class="headline-2"><?= get_theme_mod('base_products_title') ?></h2>
                </div>
                <div class="right-side">
                    <p class="text-1"><?= text_br(get_theme_mod('base_products_text', '')); ?>
                    </p>
                </div>
            </div>
            <div class="cards p-56">
                <a href="#" class="card" style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card" style="background:url('https://i.sdvk-oboi.ru/i/Antimarker/Antimarker/85964.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card" style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card" style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card" style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card" style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
            </div>
            <?= button_brown(get_theme_mod('base_products_url'), 'Полный каталог') ?>
        </div>
    </section>
    <section class="section individual-approach p-0-140">
        <div class="content">
            <div class="left-side">
                <h2 class="headline-2  wow animate__animated animate__fadeInUp"><?= get_theme_mod('individual_approach_title') ?></h2>
                <div class="main-part">
                    <div class="medium-image" style="background:url(<?= get_theme_mod('individual_approach_medium_image') ?>)"></div>
                    <div class="text-block">
                        <h3 class="headline-3"> <?= get_theme_mod('individual_approach_sub-title') ?></h3>
                        <p class="text-1"> <?= text_br(get_theme_mod('individual_approach_description')) ?></p>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="mini-block wow animate__animated animate__fadeInLeft"><span class="headline-3">></span><span class="headline-2">1000</span><span class="text-2">довольных
                        клиентов</span></div>
                <div class="large-image" style="background:url(<?= get_theme_mod('individual_approach_large_image') ?>)"></div>
            </div>
        </div>
    </section>
    <section class="section career p-140" style="background: url(<?php echo esc_url(get_theme_mod('career_image')); ?>);">
        <div class="content">
            <div class="card  wow animate__animated animate__fadeInDown">
                <img src="<?= get_theme_mod('mini-logo') ?>" alt="логотип">
                <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('career_title') ?></h2>
                <p class="text-1"><?= get_theme_mod('career_description') ?></p>
                <?= button_white('#', 'Посмотреть вакансии') ?>
            </div>
        </div>
    </section>
    <section class="section recent-publications p-140">
        <div class="content">
            <div class="top-content">
                <h2 class="headline-2"><?= get_theme_mod('recent_publications_title') ?></h2>
                <p class="text-1"><?= text_br(get_theme_mod('recent_publications_description')); ?> </p>
            </div>
            <div class="cards p-56">
                <div class="card">
                    <a href="#" class="card-image" style="background: url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')"></a>
                    <a href="#" class="card-text-block">
                        <h3 class="headline-3 card-title">Расширение нашего ассортимента новыми позициями</h3>
                        <p class="text-1 card-description">Новые позиции отражают последние тенденции и ожидания клиентов, подчёркивая прогрессивный подход компании к развитию бизнеса.</p>
                        <span class="text-2 card-date">28.10</span>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="card-image" style="background: url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')"></a>
                    <a href="#" class="card-text-block">
                        <h3 class="headline-3 card-title">Расширение нашего ассортимента новыми позициями</h3>
                        <p class="text-1 card-description">Новые позиции отражают последние тенденции и ожидания клиентов, подчёркивая прогрессивный подход компании к развитию бизнеса.</p>
                        <span class="text-2 card-date">28.10</span>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="card-image" style="background: url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')"></a>
                    <a href="#" class="card-text-block">
                        <h3 class="headline-3 card-title">Расширение нашего ассортимента новыми позициями</h3>
                        <p class="text-1 card-description">Новые позиции отражают последние тенденции и ожидания клиентов, подчёркивая прогрессивный подход компании к развитию бизнеса.</p>
                        <span class="text-2 card-date">28.10</span>
                    </a>
                </div>

            </div>
            <?= button_brown(get_theme_mod('base_products_url'), 'Перейти в медиа') ?>
        </div>
    </section>
    <section class="section contact-form p-140-0" style="background: url(<?php echo esc_url(get_theme_mod('contact_form_image')); ?>);">
        <div class="content">
            <div class="text-block">
                <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('contact_form_title') ?></h2>
                <p class="text-1"><?= get_theme_mod('contact_form_description') ?></p>
            </div>
        </div>
        <div class="form-block">
            <?php echo do_shortcode('[contact-form-7 id="383ebcb" title="Contact form 1"]') ?>
            <div class="policy-agree">
                <p class="text-2">Нажимая на кнопку отправить, вы принимаете условия</p> <a href="#" class="text-2 link">пользовательского соглашения</a>
            </div>
        </div>
    </section>
    <?php
    get_footer();
    ?>