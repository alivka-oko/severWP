<?php
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
function add_styles_and_scripts()
{
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/main.css', array(), '1.0');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('webpack-js', get_stylesheet_directory_uri() . '/assets/js/index-min.js', array('jquery'), null, true);



    wp_enqueue_style('wow-animation', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0');

    wp_enqueue_style('video', 'https://vjs.zencdn.net/8.10.0/video-js.css', array(), '1.0');
    wp_enqueue_script('video-js', 'https://vjs.zencdn.net/8.10.0/video.min.js', array('jquery'), null, true);
}
