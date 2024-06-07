<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="sticky-container"> <!-- start header -->
        <header id="header" role="banner" class="p-24">
            <div class="content">
                <div class="logo">logo</div>
                <ul class="menu text-2">
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                </ul>
                <div class="phone headline-3">+79999999</div>
            </div>
        </header>