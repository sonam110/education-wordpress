<?php
/*
Template Name: Testimonial
*/
 

get_header(); ?>

<section class="testimonial-section parallax overlay-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="testimonial-col">
                        <div class="testimonial-carousel owl-theme">
<?php   

	$testimonial = array( 'post_type' => 'testimonial', 'posts_per_page' => 6 );

	$the_query = new WP_Query( $testimonial );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <?php  
	$testimonial_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$testimonial_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	 
	?>							
						
                            <div class="test-item">
                                <div class="test-image">
                                    <img src="<?php echo $testimonial_image; ?>" alt="">
                                    <h4><?php echo the_title(); ?></h4>
                                    <span><?php echo  get_post_meta( get_the_ID(), 'Designation', true); ?></span>
                                </div>
                                <p><?php echo the_content(); ?></p>
                            </div>
							
			<?php   endwhile; endif; ?>					
                            <!---<div class="test-item">
                                <div class="test-image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonial/2.jpg" alt="">
                                    <h4>Jessi Royna</h4>
                                    <span>CEO, S.E.T Institute</span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor.</p>
                            </div>
                            <div class="test-item">
                                <div class="test-image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonial/3.jpg" alt="">
                                    <h4>Julio Alves</h4>
                                    <span>CEO, S.E.T Institute</span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor.</p>
                            </div>---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
