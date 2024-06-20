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
                <div class="medium-image" style="background: url(<?php echo esc_url(get_theme_mod('quality_section_1_medium_image')); ?>);"></div>
            </div>
            <div class="right-side">
                <div class="big-image" style="background: url(<?php echo esc_url(get_theme_mod('quality_section_1_big_image')); ?>);"></div>
                <div class="mini-block wow animate__animated animate__fadeInLeft"><span class="headline-3">></span><span class="headline-2">50</span><span class="text-2">видов
                        деревьев</span></div>
            </div>
        </div>
    </section>
    <section class="section specifications p-140" style="background: url(<?php echo esc_url(get_theme_mod('quality_section_2_bg_image')); ?>);">
        <div class="content">
            <h2 class="headline-2 wow animate__animated animate__fadeIn"><?= get_theme_mod('quality_section_2_title') ?></h2>
            <?php $specifications = CFS()->get('specifications');
            if ($specifications) : ?>
                <div class="cards">
                    <?php foreach ($specifications as $item) : ?>
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
                <h2 class="headline-2">Уникальное происхождение</h2>
                <p class="text-1">Древесина из лесов Карелии, помимо своей красоты и высокого качества, обладает историческим и культурным значением, укоренённым в традициях и обычаях этого уникального региона. Её использование в производстве придаёт не только неповторимый стиль, но и дополнительную ценность изделиям.

                    Благодаря экологической ответственности и уникальным природным ресурсам Карелии, наш материал приобретает особую ценность для потребителей и компаний, ценящих качественную продукцию и заботу о природе.</p>
            </div>
            <div class="bottom-content">
                <div class="cards">
                    <div class="card">
                        <h3 class="headline-3">Стойкость</h3>
                        <p class="text-2">Деревья в Карельском лесу могут достигать возрастов, превышающих 500 лет</p>
                    </div>
                    <div class="card">
                        <h3 class="headline-3">Соответствие стандартам</h3>
                        <p class="text-2">Сертифицировано по стандартам FSC и PEFC, выращено и обработана с учетом аспектов устойчивого лесоуправления</p>
                    </div>
                    <div class="card">
                        <h3 class="headline-3">Звукоизоляция</h3>
                        <p class="text-2">Древесина обладает звукоизоляционными свойствами, поглощая шум и создавая комфортную акустическую обстановку</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_footer();
    ?>