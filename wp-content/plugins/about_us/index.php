<?php
/*
    Plugin Name: About Us
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_about_us() {
    $args = array(
        'public' => true,
        'label' => 'About Us',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
			
    );
    register_post_type('about_us', $args);
} 
 
add_action('init', 'np_init_about_us');
?>