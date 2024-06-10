<?php
// Регистрация дополнительных меню
add_action('after_setup_theme', 'register_additional_menus');

function register_additional_menus()
{
    register_nav_menus(
        array(
            'top' => 'Главное меню сайта',
            'additional_menu' => 'Дополнительное меню',
            'footer_menu_left' => 'Нижнее меню слева',
            'footer_menu_right' => 'Нижнее меню справа',
        )
    );
}


// Добавление классов для меню
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

function add_additional_class_on_a($atts, $item, $args)
{
    if (isset($args->add_a_class)) {
        $atts['class'] = $args->add_a_class;
    }
    return $atts;
}

function add_svg_inside_menu_link($item_output, $item, $depth, $args)
{
    if ($args->theme_location == 'additional_menu') {
        $svg = '';
        if (isset($args->add_a_item)) {
            $svg = $args->add_a_item;
        }
        $item_output = str_replace('</a>', $svg . '</a>', $item_output);
    }
    return $item_output;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
add_filter('walker_nav_menu_start_el', 'add_svg_inside_menu_link', 10, 4);
