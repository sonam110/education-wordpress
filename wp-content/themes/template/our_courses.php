<?php
/*
Template Name: Our Courses
*/
get_header(); ?>

<section class="course-area">
  <div class="container">
    
    <div class="row animatedParent animateOnce">
      <?php   

	$args = array( 'post_type' => 'our_courses', 'posts_per_page' => 18 );

	$the_query = new WP_Query( $args );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php  
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	 ?>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="course-col animated fadeInUpShort slow">
          <div class="course-item">
			  <div class="course-image"> <a  href="<?php the_permalink(); ?>" > <img src="<?php echo $feat_image; ?>" alt=""> </a>

            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php echo  the_title(); ?></a></h4>
            
            <a class="btn btn-primary my-btn" href="<?php the_permalink(); ?>" role="button">Details</a> </div>
        </div>
      </div>
      <?php   endwhile; endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
