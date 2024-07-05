<?php /* Template Name: Контакты */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section p-0-140 contacts">
        <div class="ellipse ellipse-brown"></div>
        <div class="ellipse ellipse-blue"></div>
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= the_title() ?></h1>
                <div class="contact">
                    <div class="item">
                        <p class="text-2">Адрес предприятия:</p>
                        <h3 class="headline-3"><?= get_theme_mod('main_info_address'); ?></h3>
                    </div>
                    <div class="item">
                        <p class="text-2">Офис продаж:</p>
                        <h3 class="headline-3"><?= get_theme_mod('main_info_office'); ?></h3>
                    </div>
                    <div class="item">
                        <p class="text-2">Время работы:</p>
                        <h3 class="headline-3">Пн-Пт <?= get_theme_mod('main_info_weekdays'); ?> <br>
                            Сб-Вс <?= get_theme_mod('main_info_weekends'); ?></h3>
                    </div>
                    <div class="item">
                        <p class="text-2">Адрес электронной почты:</p>
                        <a href="#" class="headline-3 link"><?= get_theme_mod('main_info_email'); ?></a>
                    </div>
                    <div class="item">
                        <p class="text-2">Телефон офиса продаж:</p>
                        <a href="tel:<?= get_theme_mod('main_info_phone'); ?>"
                            class="headline-3 link"><?= get_theme_mod('main_info_phone'); ?></a>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A87dfc325174994e9f48ca59360bb659e4036763cb4dffe1107f9185571f342e1&amp;source=constructor"
                    width="100%" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>