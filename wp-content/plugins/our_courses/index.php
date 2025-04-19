<?php
/*
    Plugin Name: Our Courses
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_our_courses() {
    $args = array(
        'public' => true,
        'label' => 'Our Courses',
        'supports' => array( 'title','editor', 'thumbnail' ),
			
    );
    register_post_type('our_courses', $args);
} 
 
add_action('init', 'np_init_our_courses');
?>