<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="sticky-container"> <!-- start header -->
        <header id="header" role="banner" class="p-20">
            <div class="content">
                <?php $logo = get_theme_mod('logo');
                if ($logo) : ?>
                    <a class="custom-logo-link" href="<?php echo home_url(); ?>"><img class="custom-logo" src="<?= $logo ?>" alt="Логотип <?php bloginfo('name'); ?>"></a>
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                <ul class="menu text-2">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_id' => '',
                        'items_wrap' => '%3$s',
                        'add_a_class' => 'link',
                    ])
                    ?>
                </ul>
                <div class="phone headline-3">+79999999</div>
            </div>
        </header>