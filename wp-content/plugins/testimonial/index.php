<?php
/*
    Plugin Name: Testimonial
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_testimonial() {
    $args = array(
        'public' => true,
        'label' => 'Testimonial',
        'supports' => array( 'title','custom-fields', 'editor' , 'thumbnail' ),
			
    );
    register_post_type('testimonial', $args);
} 
 
add_action('init', 'np_init_testimonial');
?>