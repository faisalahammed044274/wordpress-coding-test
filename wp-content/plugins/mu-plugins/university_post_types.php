<?php

/**
 * Plugin Name : Test pligun
 * Description : This is a test plugin to show the data of events
 * 
 * 
 */




//Add Events
function university_post_types()
{
    register_post_type('event', array(
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
