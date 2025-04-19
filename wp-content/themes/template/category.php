<?php
/**
 * Category Template: Custom
 */
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main"> 

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title"><?php single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<section class="defult-page-title overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Our <span>Blog</span></h2>
                        <p><a href="index-one.html">Home</a> / <a href="#">Blog</a></p>
                    </div>
                </div>
            </div>
        </div>
</section>


  <section class="blog-section">
        <div class="container">
            <div class="row">
 <?php
 $i=0;
// The Loop
while ( have_posts() ) : the_post(); 
$i=$i+1;
?>
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
                         <p><?php the_content(); ?></p>
                     </div>
                </div>
				<?php  endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</div>
</div>
</div>
 
</div>
</section> 
 
 

<?php get_footer(); ?>