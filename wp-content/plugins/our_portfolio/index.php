<?php
/*
    Plugin Name: Our Portfolio
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_our_portfolio() {
    $args = array(
        'public' => true,
        'label' => 'Our Portfolio',
        'supports' => array( 'title', 'editor' , 'thumbnail' ),
			
    );
    register_post_type('our_portfolio', $args);
} 
 
add_action('init', 'np_init_our_portfolio');
?>