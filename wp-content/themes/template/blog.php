
<?php get_header(); ?>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<section class="blog-section">

        <div class="container">

            <div class="row">

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	<?php  

	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 



	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));



	?>	
		 <div class="col-lg-4 col-md-6 col-sm-6">

                     <div class="blog-col">

                         <div class="blog-img">

                            <img src="<?php echo $feat_image; ?>" alt="">

                            <div class="post-date">

                                <h3> <span><?php the_time('F jS, Y') ?></span></h3>

                            </div>

                            <div class="overlay"></div>

                         </div>

                         <div class="info-bar clearfix">

                             <ul>

                                 <li><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#"><?php

  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');

?></a></li>

                                 <li><i class="fa fa-pencil" aria-hidden="true"></i> <a href="#"><?php the_author_posts_link() ?></a></li>

                                 <li><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#">2 Hours Ago</a></li>

                             </ul>

                         </div>

                         <h4><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

                         <p><?php the_excerpt(); ?></p>

                     </div>

                </div>
		
		
	<?php endwhile; ?>
	<!-- end of the loop -->
</div>

</div>



	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</section> 
<?php get_footer(); ?>