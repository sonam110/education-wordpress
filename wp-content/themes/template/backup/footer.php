<!-- Footer Start -->

<footer class="main-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="footer-col"> 
		<?php
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."site_info where id='1'";
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>
		<a href="<?php echo site_url(); ?>"><img class="footer-logo" src="wp-content/uploads/<?php echo $post->logo; ?>" alt=""></a>
		  <?php endforeach; ?> 
          <?php   dynamic_sidebar('footer_desc');   ?>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul>
                      <?php
$defaults = array(
	'theme_location'  => 'secondary',
	'menu'            => '',
);
wp_nav_menu( $defaults );
?>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="footer-col">
          <h3>Recent Posts</h3>
          <?php
 $i=0;
// The Loop
query_posts('showposts=3'); if (have_posts()) : while ( have_posts() ) : the_post(); 
$i=$i+1;
?>
          <?php  
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	?>
          <div class="post-box"> <img src="<?php echo $feat_image; ?>" alt="">
            <p>
              <?php the_time('F jS, Y') ?>
            </p>
            <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
            <p>
              <?php the_title(); ?>
            </p>
            </a> </div>
          <?php endwhile; endif; ?>
          <!----<div class="post-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/post-2.jpg" alt="">
                            <p>22 June, 2018</p>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                        <div class="post-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/post-3.jpg" alt="">
                            <p>22 June, 2018</p>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>----> 
          
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
<?php
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."site_info where id='1'";
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>	  
        <div class="footer-col address-col">
          <h3>CONTACT US</h3>
		  
<?php echo $post->site_desc; ?>
<ul>
 	<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $post->address; ?></li>
 	<li><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $post->email; ?></li>
 	<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $post->contact; ?></li>
</ul>
  <?php endforeach; ?> 
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Copyright Start -->
<section class="copyright-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright-col text-center">
          <p>©2017. Designed & developed by <a href="" target="_blank">Dezven.</a> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<a href="#" class="scrollup"> <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </a> 

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/popper.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sticky-nav.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/css3-animate-it.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/imagesloaded.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.filterizr.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/VideoPopUp.jquery.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.counterup.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.waypoints.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jarallax.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script> 

<?php wp_footer(); ?>
</body>
</html>