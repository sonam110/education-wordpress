<?php
/*
    Plugin Name: Our Teachers
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_our_teachers() {
    $args = array(
        'public' => true,
        'label' => 'Our Teachers',
        'supports' => array( 'title','editor' , 'thumbnail' ),
			
    );
    register_post_type('our_teachers', $args);
} 
 
add_action('init', 'np_init_our_teachers');
?>