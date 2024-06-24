<?php get_header(); ?>
<?php
$gallery = CFS()->get('gallery');
$blocks_specifications = CFS()->get('blocks-specifications');
$certificates = CFS()->get('certificates');
?>
<main class="main single">
    <section class="section menu-bread">
        <div class="content">
            <ul class="menu menu-product text-2">
                <?php
                wp_nav_menu([
                    'theme_location' => 'product',
                    'container' => '',
                    'menu_id' => '',
                    'items_wrap' => '%3$s',
                    'add_a_class' => 'link',
                ])
                    ?>
            </ul>
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section product-main">
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= the_title() ?></h1>
                <?= the_content() ?>
                <?= button_brown('#', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <div class="swiper swiper-product">
                    <div class="swiper-wrapper">
                        <?php foreach ($gallery as $key => $img): ?>
                            <div class="swiper-slide">
                                <a href="<?= $img['image'] ?>" class="glightbox" data-gallery="myGallery">
                                    <img src="<?= $img['image'] ?>" alt="<?= the_title() . '_' . $key + 1 . '_image' ?>">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper swiper-thumbnail"> <!-- added-->
                    <div class="swiper-wrapper"> <!-- added-->
                        <?php foreach ($gallery as $key => $img): ?>
                            <div class="swiper-slide"><img src="<?= $img['image'] ?>"></div>
                        <?php endforeach; ?>
                    </div> <!-- added-->
                </div>
            </div>
        </div>
    </section>
    <section class="section product-advantages p-56">
        <div class="content">
            <div class="left-side">
                <h3 class="headline-3">Преимущества</h3>
                <div class="text-1 advantages-text"> <?= CFS()->get('advantages') ?></div>

                <div class="accordion p-56-0">

                    <?php if ($blocks_specifications): ?>
                        <?php foreach ($blocks_specifications as $key => $item):
                            $specifications = $item['specifications'];
                            ?>
                            <section>
                                <input type="checkbox" class="accordion__checkbox" id="accordion-heading-<?= $key + 1 ?>">
                                <label class="accordion__heading headline-3"
                                    for="accordion-heading-<?= $key + 1 ?>"><?= $item['block-title'] ?> технические
                                    характеристики<span class="circle"></span></label>
                                <div class="accordion__content specifications">
                                    <?php foreach ($specifications as $specification): ?>
                                        <p class="text-2 specification"><span
                                                class="value text-1"><?= $specification['parameter'] ?></span><?= $specification['value'] ?>
                                        </p>
                                    <?php endforeach; ?>
                                </div>
                            </section>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if ($certificates): ?>
                        <section>
                            <input type="checkbox" class="accordion__checkbox" id="accordion-heading-999">
                            <label class="accordion__heading headline-3" for="accordion-heading-999">Сертификаты<span
                                    class="circle"></span></label>
                            <div class="accordion__content">
                                <?php foreach ($certificates as $certificate): ?>
                                    <a href="<?= $certificate['certificate'] ?>" target="_blank"
                                        class="accordion-doc text-1"><span class="ico-doc"><?= doc_icon() ?></span>
                                        <span class="name-signature">
                                            <span class="name"><?= $certificate['name'] ?></span>
                                            <span class="signature"><?= $certificate['signature'] ?></span>
                                        </span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif ?>
                </div>
            </div>
            <div class="right-side">
                <?= get_template_part('consultation') ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>