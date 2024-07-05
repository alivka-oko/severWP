<?php

add_filter('single_template', 'my_single_template');

function my_single_template($single)
{
    global $wp_query, $post;
    foreach ((array) get_the_category() as $cat) {
        if (file_exists(get_template_directory() . '/single-' . $cat->slug . '.php')) {
            return get_template_directory() . '/single-' . $cat->slug . '.php';
        } elseif (file_exists('/single-' . $cat->term_id . '.php')) {
            return get_template_directory() . '/single-' . $cat->term_id . '.php';
        }
    }
    return $single;
}


function translit_sef($value)
{
    $converter = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ь' => '',
        'ы' => 'y',
        'ъ' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
    );

    $value = mb_strtolower($value);
    $value = strtr($value, $converter);
    $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
    $value = mb_ereg_replace('[-]+', '-', $value);
    $value = trim($value, '-');

    return $value;
}



function getWordForm($n, $titles)
{
    $cases = array(2, 0, 1, 1, 1, 2);
    return $titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
}

function transform_mini_block($input)
{
    // Регулярное выражение для поиска цифры и текста
    $pattern = '/([><=]*)(\d+)(.*)/';

    // Замена совпадений с помощью preg_replace_callback
    $output = preg_replace_callback($pattern, function ($matches) {
        $sign = $matches[1];
        $number = $matches[2];
        $text = $matches[3];

        // Формирование HTML-кода в соответствии с правилами
        $output = '<div class="mini-block wow animate__animated animate__fadeInLeft">';
        $output .= '<span class="headline-3">' . htmlspecialchars($sign) . '</span>';
        $output .= '<span class="headline-2">' . htmlspecialchars($number) . '</span>';
        $output .= '<span class="text-2">' . htmlspecialchars($text) . '</span>';
        $output .= '</div>';

        return $output;
    }, $input);

    return $output;
}
function miniBlock($text)
{
    // Регулярное выражение для поиска чисел с символами перед ними
    $pattern1 = '/([><=!]+)\s*(\d+)/';

    // Регулярное выражение для поиска чисел с символами после них
    $pattern2 = '/(\d+)\s*([+-])/';

    // Регулярное выражение для поиска всего текста после цифр
    $pattern3 = '/(\d+\s+.*)/';

    // Заменяем числа с символами перед ними
    $text = preg_replace($pattern1, '<span class="headline-3">$1</span><span class="headline-2">$2</span>', $text);

    // Заменяем числа с символами после них
    $text = preg_replace($pattern2, '<span class="headline-2">$1$2</span>', $text);

    // Заменяем весь текст после цифр
    $text = preg_replace($pattern3, '<span class="text-2">$1</span>', $text);

    return '<div class="mini-block wow animate__animated animate__fadeInRight">' . $text . '</div>';
}

if (!function_exists('custom_pagination')) {
    function custom_pagination($query = null)
    {
        global $wp_query;
        if ($query) {
            $total = $query->max_num_pages;
        } else {
            $total = $wp_query->max_num_pages;
        }

        if ($total > 1) {
            $big = 999999999; // need an unlikely integer
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => $current_page,
                    'total' => $total,
                    'prev_text' => '',
                    'next_text' => '',
                    'end_size' => 1,
                    'mid_size' => 2,
                    'type' => 'list',
                )
            );
        }
    }
}



?>