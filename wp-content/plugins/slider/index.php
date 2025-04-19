<?php
/*
    Plugin Name: Slider TutorSigma
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_slider() {
    $args = array(
        'public' => true,
        'label' => 'Slider',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
			
    );
    register_post_type('slider', $args);
} 
 
add_action('init', 'np_init_slider');
?>