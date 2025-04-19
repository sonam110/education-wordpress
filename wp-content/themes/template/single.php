<?php get_header();?><style>.main-herader .navbar {    border-bottom: 1px solid #00000024;    box-shadow: 0px 1px #8888882b;}</style>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--<div class="banner-block parallex"  style="background-image:url(//law.themeheap.com/wp-content/uploads/2016/05/img02.jpg);height: 266px;">-->
  <div class="banner-overlay" style="background:rgba(0,0,0,0.5)"></div><div class="details-page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 banner-box"><div class="right-box">
        <header class="banner-heading">
          <h1 style="color:black; ">
            <?php   the_title();  ?>
          </h1>
        
        </header>
      </div>   </div>
    </div>
  </div>
</div>
<main id="main">
  <div class="container">
    <div class="row">
      <div class="news-posts single-post-view">
        <aside id="sidebar" class="col-sm-4 col-md-3 col-xs-12 hidden-sm pull-right"> </aside>
        <div id="content" class="col-sm-8 col-md-9 col-xs-12 pull-left">
          <article class="post-blog">
          
            <div class="post-content" style="padding-bottom: 35px;">
		
              <?php the_content(); ?>
	
            </div>
			
            <div class="comments-section"> </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</main>
 <?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer();?>

