<?php

add_theme_support('post-thumbnails'); // для всех типов постов


add_action('customize_register', function ($wp_customize) {
    $wp_customize->add_setting('logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label' => __('Логотип', 'Kama-stroy'),
                'section' => 'title_tagline',
                'settings' => 'logo',
            )
        )
    );

    $wp_customize->add_setting('mini-logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'mini-logo',
            array(
                'label' => __('Небольшой логотип (моб. версия)', 'Kama-stroy'),
                'section' => 'title_tagline',
                'settings' => 'mini-logo',
            )
        )
    );

    // Панель "Главная"
    $wp_customize->add_panel('main_panel', array(
        'title' => 'Главная',
        'priority' => 10,
    ));

    // Главная секция в панели "Главная"
    $wp_customize->add_section('main_section', array(
        'title' => 'Основные настройки',
        'panel' => 'main_panel',
        'priority' => 10,
    ));

    // Поля для главной секции
    $wp_customize->add_setting('main_title', array('default' => ''));
    $wp_customize->add_control('main_title', array(
        'label' => 'Заголовок',
        'section' => 'main_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_description', array('default' => ''));
    $wp_customize->add_control('main_description', array(
        'label' => 'Описание',
        'section' => 'main_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('main_catalog_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_catalog_image', array(
        'label' => 'Фото каталога',
        'section' => 'main_section',
    )));

    // Секция "О компании" в панели "Главная"
    $wp_customize->add_section('about_section', array(
        'title' => 'О компании',
        'panel' => 'main_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('about_title', array('default' => ''));
    $wp_customize->add_control('about_title', array(
        'label' => 'Заголовок',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_description', array('default' => ''));
    $wp_customize->add_control('about_description', array(
        'label' => 'Описание',
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_large_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_large_image', array(
        'label' => 'Фото большое',
        'section' => 'about_section',
    )));

    $wp_customize->add_setting('about_medium_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_medium_image', array(
        'label' => 'Фото среднее',
        'section' => 'about_section',
    )));

    $wp_customize->add_setting('about_small_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_small_image', array(
        'label' => 'Фото малое',
        'section' => 'about_section',
    )));

    $wp_customize->add_setting('about_miniblock', array('default' => ''));
    $wp_customize->add_control('about_miniblock', array(
        'label' => 'мини-блок',
        'section' => 'about_section',
        'type' => 'text',
    ));
    // Секция "особенности" в панели "Главная"
    $wp_customize->add_section('features_section', array(
        'title' => 'Особенности',
        'panel' => 'main_panel',
        'priority' => 30,
    ));

    $wp_customize->add_setting('features_title', array('default' => 'Особенности'));
    $wp_customize->add_control('features_title', array(
        'label' => 'Заголовок',
        'section' => 'features_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('features_bg');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_bg', array(
        'label' => 'Фоновое изображение',
        'section' => 'features_section',
    )));

    // Секция "Лучшее качество" в панели "Главная"
    $wp_customize->add_section('best_quality_section', array(
        'title' => 'Лучшее качество',
        'panel' => 'main_panel',
        'priority' => 30,
    ));

    $wp_customize->add_setting('best_quality_title', array('default' => 'Лучшее качество'));
    $wp_customize->add_control('best_quality_title', array(
        'label' => 'Заголовок',
        'section' => 'best_quality_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('best_quality_word1', array('default' => ''));
    $wp_customize->add_control('best_quality_word1', array(
        'label' => 'Слово 1',
        'section' => 'best_quality_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('best_quality_word2', array('default' => ''));
    $wp_customize->add_control('best_quality_word2', array(
        'label' => 'Слово 2',
        'section' => 'best_quality_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('best_quality_word3', array('default' => ''));
    $wp_customize->add_control('best_quality_word3', array(
        'label' => 'Слово 3',
        'section' => 'best_quality_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('best_quality_text_right', array('default' => ''));
    $wp_customize->add_control('best_quality_text_right', array(
        'label' => 'Текст справа',
        'section' => 'best_quality_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('best_quality_link', array('default' => ''));
    $wp_customize->add_control('best_quality_link', array(
        'label' => 'Ссылка для перехода',
        'section' => 'best_quality_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('best_quality_video');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'best_quality_video', array(
        'label' => 'Видео',
        'section' => 'best_quality_section',
        'mime_type' => 'video',
    )));
    // секция "основная продукция" в панели "Главная"
    $wp_customize->add_section('base_products_section', array(
        'title' => 'Основная продукция',
        'panel' => 'main_panel',
        'priority' => 40,
    ));

    $wp_customize->add_setting('base_products_title', array('default' => 'Основная продукция'));
    $wp_customize->add_control('base_products_title', array(
        'label' => 'Заголовок',
        'section' => 'base_products_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('base_products_text', array('default' => 'Возобновляемая древесина северных лесов является основным сырьём, используемым в продукции Северного стандарта.'));
    $wp_customize->add_control('base_products_text', array(
        'label' => 'Текст справа',
        'section' => 'base_products_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('base_products_url', array('default' => ''));
    $wp_customize->add_control('base_products_url', array(
        'label' => 'Ссылка перехода',
        'section' => 'base_products_section',
        'type' => 'text',
    ));

    // секция "Индивидуальный подход" в панели "Главная"
    $wp_customize->add_section('individual_approach_section', array(
        'title' => 'Индивидуальный подход',
        'panel' => 'main_panel',
        'priority' => 40,
    ));

    $wp_customize->add_setting('individual_approach_title', array('default' => 'индивидуальный
подход'));
    $wp_customize->add_control('individual_approach_title', array(
        'label' => 'Заголовок',
        'section' => 'individual_approach_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('individual_approach_medium_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'individual_approach_medium_image', array(
        'label' => 'Среднее фото',
        'section' => 'individual_approach_section',
    )));

    $wp_customize->add_setting('individual_approach_sub-title', array('default' => 'Думаем о покупателях'));
    $wp_customize->add_control('individual_approach_sub-title', array(
        'label' => 'Подзаголовок',
        'section' => 'individual_approach_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('individual_approach_description', array('default' => ''));
    $wp_customize->add_control('individual_approach_description', array(
        'label' => 'Описание',
        'section' => 'individual_approach_section',
        'type' => 'textarea',
    ));


    $wp_customize->add_setting('individual_approach_large_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'individual_approach_large_image', array(
        'label' => 'Большое фото',
        'section' => 'individual_approach_section',
    )));

    $wp_customize->add_setting('individual_approach_miniblock', array('default' => ''));
    $wp_customize->add_control('individual_approach_miniblock', array(
        'label' => 'Мини-блок',
        'section' => 'individual_approach_section',
        'type' => 'text',
    ));

    // секция "Карьера" в панели "Главная"
    $wp_customize->add_section('career_section', array(
        'title' => 'Карьера',
        'panel' => 'main_panel',
        'priority' => 40,
    ));

    $wp_customize->add_setting('career_title', array('default' => ''));
    $wp_customize->add_control('career_title', array(
        'label' => 'Заголовок',
        'section' => 'career_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('career_description', array('default' => ''));
    $wp_customize->add_control('career_description', array(
        'label' => 'Описание',
        'section' => 'career_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('career_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'career_image', array(
        'label' => 'Фоновое изображение',
        'section' => 'career_section',
    )));

    $wp_customize->add_setting('career_miniblock', array('default' => ''));
    $wp_customize->add_control('career_miniblock', array(
        'label' => 'Ссылка перехода по кнопке',
        'section' => 'career_section',
        'type' => 'text',
    ));

    // секция "Недавние публикации" в панели "Главная"
    $wp_customize->add_section('recent_publications_section', array(
        'title' => 'Недавние публикации',
        'panel' => 'main_panel',
        'priority' => 40,
    ));

    $wp_customize->add_setting('recent_publications_title', array('default' => ''));
    $wp_customize->add_control('recent_publications_title', array(
        'label' => 'Заголовок',
        'section' => 'recent_publications_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('recent_publications_description', array('default' => ''));
    $wp_customize->add_control('recent_publications_description', array(
        'label' => 'Описание',
        'section' => 'recent_publications_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('recent_publications_miniblock', array('default' => ''));
    $wp_customize->add_control('recent_publications_miniblock', array(
        'label' => 'Ссылка перехода по кнопке',
        'section' => 'recent_publications_section',
        'type' => 'text',
    ));
});

add_action('customize_register', function ($wp_customize) {
    // Панель "Контактная форма"
    $wp_customize->add_section('contact_form_section', array(
        'title' => 'Контактная форма',
        'priority' => 20,
    ));

    // Поля для секции "Контактная форма"
    $wp_customize->add_setting('contact_form_title', array('default' => ''));
    $wp_customize->add_control('contact_form_title', array(
        'label' => 'Заголовок',
        'section' => 'contact_form_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_form_description', array('default' => ''));
    $wp_customize->add_control('contact_form_description', array(
        'label' => 'Описание',
        'section' => 'contact_form_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('contact_form_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_form_image', array(
        'label' => 'Фото',
        'section' => 'contact_form_section',
    )));
});

add_action('customize_register', function ($wp_customize) {
    // Панель "О компании"
    $wp_customize->add_panel('about_company_panel', array(
        'title' => 'О компании',
        'priority' => 40,
    ));

    // 1 секция в панели "О компании"
    $wp_customize->add_section('about_company_section_1', array(
        'title' => '1 секция',
        'panel' => 'about_company_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('about_company_section_1_title', array('default' => ''));
    $wp_customize->add_control('about_company_section_1_title', array(
        'label' => 'Заголовок',
        'section' => 'about_company_section_1',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_company_section_1_description', array('default' => ''));
    $wp_customize->add_control('about_company_section_1_description', array(
        'label' => 'Описание',
        'section' => 'about_company_section_1',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_company_section_1_large_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_company_section_1_large_image', array(
        'label' => 'Большое фото',
        'section' => 'about_company_section_1',
    )));

    $wp_customize->add_setting('about_company_section_1_medium_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_company_section_1_medium_image', array(
        'label' => 'Среднее фото',
        'section' => 'about_company_section_1',
    )));

    // 2 секция в панели "О компании"
    $wp_customize->add_section('about_company_section_2', array(
        'title' => '2 секция',
        'panel' => 'about_company_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('about_company_section_2_title', array('default' => ''));
    $wp_customize->add_control('about_company_section_2_title', array(
        'label' => 'Заголовок',
        'section' => 'about_company_section_2',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_company_section_2_description', array('default' => ''));
    $wp_customize->add_control('about_company_section_2_description', array(
        'label' => 'Описание',
        'section' => 'about_company_section_2',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_company_section_2_medium_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_company_section_2_medium_image', array(
        'label' => 'Среднее фото',
        'section' => 'about_company_section_2',
    )));

    $wp_customize->add_setting('about_company_section_2_subtitle', array('default' => ''));
    $wp_customize->add_control('about_company_section_2_subtitle', array(
        'label' => 'Подзаголовок',
        'section' => 'about_company_section_2',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_company_section_2_large_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_company_section_2_large_image', array(
        'label' => 'Большое фото',
        'section' => 'about_company_section_2',
    )));

    $wp_customize->add_setting('about_company_section_2_text', array('default' => ''));
    $wp_customize->add_control('about_company_section_2_text', array(
        'label' => 'Текст подзаголовка',
        'section' => 'about_company_section_2',
        'type' => 'textarea',
    ));

    // 3 секция в панели "О компании"
    $wp_customize->add_section('about_company_section_3', array(
        'title' => '3 секция',
        'panel' => 'about_company_panel',
        'priority' => 30,
    ));

    $wp_customize->add_setting('about_company_section_3_title', array('default' => ''));
    $wp_customize->add_control('about_company_section_3_title', array(
        'label' => 'Заголовок',
        'section' => 'about_company_section_3',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_company_section_3_description', array('default' => ''));
    $wp_customize->add_control('about_company_section_3_description', array(
        'label' => 'Описание',
        'section' => 'about_company_section_3',
        'type' => 'textarea',
    ));
});

add_action('customize_register', function ($wp_customize) {
    // Панель "Основная информация"
    $wp_customize->add_section('main_info_section', array(
        'title' => 'Основная информация',
        'priority' => 30,
    ));

    // Поля для секции "Основная информация"
    $wp_customize->add_setting('main_info_phone', array('default' => ''));
    $wp_customize->add_control('main_info_phone', array(
        'label' => 'Телефон',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_info_email', array('default' => ''));
    $wp_customize->add_control('main_info_email', array(
        'label' => 'Почта',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_info_postcode', array('default' => ''));
    $wp_customize->add_control('main_info_postcode', array(
        'label' => 'Индекс',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_info_terms_link', array('default' => ''));
    $wp_customize->add_control('main_info_terms_link', array(
        'label' => 'Ссылка на Пользовательское соглашение',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_info_privacy_policy_link', array('default' => ''));
    $wp_customize->add_control('main_info_privacy_policy_link', array(
        'label' => 'Ссылка на Политику конфиденциальности',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('main_info_copyright', array('default' => ''));
    $wp_customize->add_control('main_info_copyright', array(
        'label' => 'Copyright',
        'section' => 'main_info_section',
        'type' => 'text',
    ));

    // Секция "Социальные сети" в панели "Основная информация"
    $wp_customize->add_section('social_links_section', array(
        'title' => 'Социальные сети',
        'priority' => 40,
    ));

    $wp_customize->add_setting('social_link_vk', array('default' => ''));
    $wp_customize->add_control('social_link_vk', array(
        'label' => 'ВК',
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('social_link_youtube', array('default' => ''));
    $wp_customize->add_control('social_link_youtube', array(
        'label' => 'Ютуб',
        'section' => 'social_links_section',
        'type' => 'text',
    ));
});
