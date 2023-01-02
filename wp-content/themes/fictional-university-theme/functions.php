<?php

function university_files()
{
    // Javascript loaded
    wp_enqueue_script('main-university-script', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    // Styles / CSS Loaded
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style(
        'university_main_styles',
        get_theme_file_uri('/build/style-index.css')
    );
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');
function university_features()
{
    register_nav_menu('headerMenuLocation', 'HEADER MENU LOCATION');
    register_nav_menu('footerLocationOne', 'FOOTER LOCATION ONE');
    register_nav_menu('footerLocationTwo', 'FOOTER LOCATION TWO');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

function university_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set(
            'meta_query',
            array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                )
            )

        );
    }
}

add_action('pre_get_posts', 'university_adjust_queries');
