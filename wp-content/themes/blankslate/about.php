<?php /* Template Name: О компании */ ?>
<?php
get_header();

$bigphoto1 =  get_theme_mod('about_company_section_1_large_image');
$mediumphoto1 =  get_theme_mod('about_company_section_1_medium_image');
$bigphoto2 =  get_theme_mod('about_company_section_2_large_image');
$mediumphoto2 =  get_theme_mod('about_company_section_2_medium_image');
$bgphoto =  get_theme_mod('about_company_section_3_image');
?>
<main class="main about-page">
    <section class="section about-1 p-96-140">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
            <div class="main-content">
                <div class="left-side">
                    <h1 class="headline-2"><?= get_theme_mod('about_company_section_1_title') ?></h1>
                    <div class="big-image" style="background: url(<?= $bigphoto1 ?>);"></div>
                </div>
                <div class="right-side">
                    <p class="text-1"><?= text_br(get_theme_mod('about_company_section_1_description')) ?></p>
                    <div class="medium-image" style="background: url(<?= $mediumphoto1 ?>);"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about-2 p-96-140">
        <div class="content">
            <div class="left-side">
                <h2 class="headline-2"><?= get_theme_mod('about_company_section_2_title') ?></h2>
                <p class="text-1"><?= text_br(get_theme_mod('about_company_section_2_description')) ?></p>
                <div class="medium-image" style="background: url(<?= $mediumphoto2 ?>);"></div>
            </div>
            <div class="right-side">
                <h3 class="headline-3"><?= get_theme_mod('about_company_section_2_subtitle') ?></h3>
                <div class="big-image" style="background: url(<?= $bigphoto2 ?>);"></div>
                <p class="text-1"><?= get_theme_mod('about_company_section_2_text') ?></p>
            </div>
        </div>
    </section>
    <section class="section mission p-140" style="background: url(<?= $bgphoto ?>);">
        <div class="content">
            <div class="card  wow animate__animated animate__fadeInDown">
                <img src="<?= get_theme_mod('mini-logo') ?>" alt="логотип">
                <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('about_company_section_3_title') ?></h2>
                <p class="text-1"><?= get_theme_mod('about_company_section_3_description') ?></p>
            </div>
        </div>
    </section>

    <?php
    get_footer();
    ?>