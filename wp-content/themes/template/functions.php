<?php  

register_nav_menus( array(
		'primary'   => __( 'Header Menu', 'twentyfourteen' ),
		'secondary' => __( 'Footer Menu', 'twentyfourteen' ),
		'Third' => __( 'Sidebar Menu', 'twentyfourteen' ),
	) );
	
	
	add_theme_support( 'post-thumbnails' );


function wpgyan_widgets_top_header() {
 
	register_sidebar( array(
		'name' => 'Top Header',
		'id' => 'top_header',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_top_header' );

function wpgyan_widgets_top_header_socialmedia() {
 
	register_sidebar( array(
		'name' => 'Top Header Social Media',
		'id' => 'top_header_socialmedia',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_top_header_socialmedia' );

function wpgyan_widgets_contact_us_footer() {
 
	register_sidebar( array(
		'name' => 'Contact Us Footer',
		'id' => 'contact_us_footer',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_contact_us_footer' );


function wpgyan_widgets_footer_desc() {
 
	register_sidebar( array(
		'name' => 'Footer Description',
		'id' => 'footer_desc',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_footer_desc' );


function wpgyan_widgets_our_courses() {
 
	register_sidebar( array(
		'name' => 'Our Courses',
		'id' => 'our_courses',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_our_courses' );	


function wpgyan_widgets_our_teacher() {
 
	register_sidebar( array(
		'name' => 'Our Teachers',
		'id' => 'our_teacher',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_our_teacher' );	


function wpgyan_widgets_our_portfolio() {
 
	register_sidebar( array(
		'name' => 'Our Portfolio',
		'id' => 'our_portfolio',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_our_portfolio' );	

function wpgyan_widgets_our_latest_news() {
 
	register_sidebar( array(
		'name' => 'Our Latest News',
		'id' => 'our_latest_news',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_our_latest_news' );


function wpgyan_widgets_our_university_campus() {
 
	register_sidebar( array(
		'name' => 'Our University Campus',
		'id' => 'our_university_campus',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_our_university_campus' );

function wpgyan_widgets_homepage_video() {
 
	register_sidebar( array(
		'name' => 'Homepage Video',
		'id' => 'homepage_video',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_homepage_video' );