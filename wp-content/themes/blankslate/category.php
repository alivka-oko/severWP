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
                <p class="text-1">Ниже расположены ответы на самые часто задаваемые вопросы. Если вы не нашли нужный
                    ответ, то нажмите кнопку задать вопрос и заполните форму или свяжитесь с нами по почте
                    mail@north.com или по телефону +7 499 841-84-00</p>
                <?= button_brown('#', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <div class="img"
                    style="background: url(<?php echo esc_url(get_theme_mod('quality_section_2_bg_image')); ?>);"></div>
            </div>
        </div>
    </section>
    <section class="section catalog-products p-0-140">
        <div class="content">
            <div class="cards p-56">
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://i.sdvk-oboi.ru/i/Antimarker/Antimarker/85964.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <a href="#" class="card"
                    style="background:url('https://get.pxhere.com/photo/tree-nature-forest-branch-winter-plant-wood-leaf-green-grow-evergreen-fir-christmas-tree-twig-conifer-spruce-needles-periwinkle-of-course-larch-pine-cones-pine-needles-needle-branch-tannenzweig-plant-stem-woody-plant-land-plant-arecales-palm-family-582573.jpg')">
                    <?= button_long('', 'Деревянная доска для пола') ?>
                </a>
                <div class="card-form">
                    <h3 class="headline-3">Нужна консультация?</h3>
                    <p class="text-2">Уточнить цену и другие параметры вы можете у наших менеджеров.</p>
                    <?= button_brown('#', 'Оставить заявку') ?>
                </div>
            </div>
            <?= button_brown(get_theme_mod('base_products_url'), 'Полный каталог') ?>
        </div>
    </section>

    <section class="section contact-form p-140-0"
        style="background: url(<?php echo esc_url(get_theme_mod('contact_form_image')); ?>);">
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