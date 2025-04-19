<?php
/*
    Plugin Name: Our Latest News
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Arshad
    Version: 1.0
*/
function np_init_latest_news() {
    $args = array(
        'public' => true,
        'label' => 'Our Latest News',
        'supports' => array( 'title', 'editor' , 'thumbnail' ),
			
    );
    register_post_type('latest_news', $args);
} 
 
add_action('init', 'np_init_latest_news');
?>