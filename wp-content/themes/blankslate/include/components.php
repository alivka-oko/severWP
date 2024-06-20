<?php


function text_br($text)
{
    return nl2br($text);
}


function video_url($id)
{
    $video_url = wp_get_attachment_url($id);
    return esc_url($video_url);
}


function button_long($url, $input)
{
    if ($url != '') {
        return ' <a href="' . $url . '" class="button button-long wow animate__animated animate__zoomIn">' . $input . ' <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
    </svg>
</a>';
    } else {
        return ' <div class="button button-long wow animate__animated animate__zoomIn">' . $input . ' <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
    </svg>
</div>';
    }
}

function button_brown($url, $input)
{
    if ($url != '') {
        return '<a href="' . $url . '" class="button button-brown">' . $input . '  <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
                            </svg>
                        </a>';
    } else {
        return '<div class="button button-brown">' . $input . '  <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
    </svg>
</div>';
    }
}

function button_white($url, $input)
{
    if ($url != '') {
        return '<a href="' . $url . '" class="button button-white">' . $input . '  <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
                            </svg>
                        </a>';
    } else {
        return '<div class="button button-white">' . $input . '  <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" />
    </svg>
</div>';
    }
}

function doc_icon()
{
    return '<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 6.2L9.88571 10M9.88571 10L6 6.4M9.88571 10V0" stroke="#204E4A" stroke-width="2"/>
<path d="M1 9V15H19V9" stroke="#204E4A" stroke-width="2"/>
</svg>';
}