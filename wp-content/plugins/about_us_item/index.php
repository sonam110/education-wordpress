<?php
/*
    Plugin Name: About Us Item
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_about_us_item() {
    $args = array(
        'public' => true,
        'label' => 'About Us Item',
        'supports' => array( 'title', 'editor'),
			
    );
    register_post_type('about_us_item', $args);
} 
 
add_action('init', 'np_init_about_us_item');
?>