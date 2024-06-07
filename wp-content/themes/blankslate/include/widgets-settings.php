<?php
// Виджет
function steam_widgets_init()
{
    register_sidebar(array(
        'name' => __('Правая колонка', 'steam'),
        'id' => 'right-menu-area',
        'description' => __('Новости', 'steam'),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'steam_widgets_init');

// Подключаем файл custom-news-widget.php
require get_template_directory() . '/widgets/custom-news-widget.php';
