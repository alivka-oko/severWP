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
            <a href="#" class="button-long wow animate__animated animate__zoomIn">Посмотреть полный каталог продукции <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
                </svg>
            </a>
        </div>
    </div>
    <div class="ellipse ellipse-blue"></div>
</section>
</div><!-- end header -->
<main class="main home">

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
    </section>
    <section class="section features p-140" style="background: url(<?php echo esc_url(get_theme_mod('features_bg')); ?>);">
        <div class="content">
            <h2 class="headline-2">особенности</h2>
            <?php $features = CFS()->get('features');
            if ($features) : ?>
                <div class="cards">
                    <?php foreach ($features as $item) : ?>
                        <div class="card">
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
                    <h2 class="headline-2">лучшее качество</h2>
                    <div class="words">
                        <p class="headline-3"><?= get_theme_mod('best_quality_word1') ?></p>
                        <p class="headline-3"><?= get_theme_mod('best_quality_word3') ?></p>
                        <p class="headline-3"><?= get_theme_mod('best_quality_word2') ?></p>
                        <a href="" class="button button-brown">Подробнее <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
                            </svg>
                        </a>
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
    <?php
    get_footer();
    ?>