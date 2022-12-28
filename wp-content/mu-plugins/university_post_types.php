<?php

/**
 * Name: Test MU Plugin
 * Description: This is a event test plugin
 * Version: 1.0.0
 * Author: FaisalAhammed044274
 */


//Add Events
function university_post_types()
{
    register_post_type('event', array(
        'supports' => array('title','editor','excerpt','custom-fields'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all items' => 'All Events',
            'singular_name' => 'Events'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'university_post_types');
