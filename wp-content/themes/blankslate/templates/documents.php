<?php /* Template Name: Документы */ ?>
<?php
get_header();
?>
<main class="main">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>

    <section class="section p-0-140 documents">
        <div class="ellipse ellipse-brown"></div>
        <div class="ellipse ellipse-blue"></div>
        <div class="content">
            <div class="headline">
                <h1 class="headline-2"><?= the_title() ?></h1>
            </div>

            <div class="main-content">
                <?php $docstab = CFS()->get('doc-tab');
                if ($docstab):
                    foreach ($docstab as $item):
                        $docs = $item['docs'];
                        ?>
                        <div class="accordion">
                            <section>
                                <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">
                                <label class="accordion__heading headline-3" for="accordion-heading-1"><?= $item['name'] ?>
                                    <span class="circle"></span></label>
                                <?php if ($docs): ?>
                                    <div class="accordion__content">
                                        <?php foreach ($docs as $doc): ?>
                                            <a href="<?= $doc['doc'] ?>" target="_blank" class="accordion-doc text-1"><span
                                                    class="ico-doc"><?= doc_icon() ?></span><?= $doc['name'] ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </section>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?= get_template_part('consultation') ?>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>