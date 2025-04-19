<?php
if(isset($_POST['submitnow']))
 	{
		global $wpdb;
		$result  = $wpdb->query("INSERT INTO ".$wpdb->prefix."reg_student (fullname , emailid , phonenumber, message) VALUES ('".$_POST['fullname']."', '".$_POST['emailid']."', '".$_POST['phonenumber']."', '".$_POST['message']."')");

wp_redirect('http://carpediemsocial.com/tutorsigma/thank-you/');
	}
?>
<style>
@media only screen and (max-width: 600px) {
.formmm {
	margin-top: 50px;
	padding-left: 35px !important;
	padding-right: 35px !important;
}
.formmm strong {
	font-size: 20px !important;
}
.formmm {
	margin-bottom: -420px !important;
	;
}
.formmm form {
	padding: 8px 29px 5px 29px !important;
}
div.wpcf7 .ajax-loader {
	height: 0px !important;
	;
}
.formmm form p {
	overflow: hidden;
	margin: 0px 0px 5px !important;
	;
}
}
</style>
<style>
.about-section .myy-1{height:100%;} 
.about-section .myy-2 {
    width: 100%;
    position: relative;
    top: -330px;
    margin: 0;
    padding: 0;
}
 @media only screen and (max-width: 767px) {
.about-section .myy-2 {
    width: 100%;
    position: relative;
    top: -39!important;
    margin: 0;
    padding: 0;
}



.formmm {
	margin-top: 50px;
	padding-left: 35px !important;
	padding-right: 35px !important;
}
.formmm strong {
	font-size: 20px !important;
}
.formmm {
	margin-bottom: -420px !important;
	;
}
.formmm form {
	padding: 8px 29px 5px 29px !important;
}
div.wpcf7 .ajax-loader {
	height: 0px !important;
	;
}
.formmm form p {
	overflow: hidden;
	margin: 0px 0px 5px !important;
	;
}
}


 
</style>
<?php get_header(); ?>
<!-- Slider Start -->
<section class="main-slider-area">
  <ul class="main-slider slide">
    <?php   $i=0;
	$slider = array( 'post_type' => 'slider', 'posts_per_page' => 3 );
	$the_query = new WP_Query( $slider );
 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
	$i=$i+1;
	?>
    <?php  
	$slider_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	$slider_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
	 ?>
    <li class="slide__item item-bg-<?php echo $i; ?>" style="background: url('<?php echo $slider_image; ?>');">
      <div class="slide-caption">
        <h2 class="slide-caption__title"><?php echo the_title(); ?></h2>
        <p class="slide-caption__desc"><?php echo  the_content(); ?></p>
        <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More</a> </div>
    </li>
    <?php endwhile; endif; ?>
  </ul>
  
  <div class="container ">
  <div class="row alphabet">
  <div class="col-md-12">
  <div class="formmm">
    <div >
      <div class="screen-reader-response"></div>
      <form class="wpcf7-form" novalidate="novalidate" action="" method="post">
        <p><strong class="title">Get a Free Quote!</strong></p>
        <p>
          <label><span class="wpcf7-form-control-wrap your-name">
            <input type="text" name="fullname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your name" required>
            </span> </label>
        </p>
        <p>
          <label><span class="wpcf7-form-control-wrap your-email">
            <input type="email" name="emailid" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email" required>
            </span> </label>
        </p>
        <p>
          <label><span class="wpcf7-form-control-wrap your-subject">
            <input type="text" name="phonenumber" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Enter your phone number" required>
            </span> </label>
        </p>
        <p>
          <label> <span class="wpcf7-form-control-wrap your-message">
            <textarea name="message" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea" 
			aria-invalid="false" placeholder="Add your Message" required></textarea>
            </span> </label>
        </p>
        
          <input type="submit" name="submitnow" value="REQUEST A CALLBACK">
          <br>
          <em>100% privacy Guaranteed.</em></p>
      </form>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>

 
<section class="about-section">
  <div class="container myy-1">
    <div class=" animatedParent animateOnce myy-2">
      <div class="row">
	  
	  <div class="col-lg-7  ghfghfgh">
	  
	  
        <div class="about-col animated fadeInLeftShort slow">
          <?php  
	$aboutus = array( 'post_type' => 'about_us', 'posts_per_page' => 1 );

	$the_query = new WP_Query( $aboutus );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
	
	?>
          <h2><?php echo the_title(); ?></h2>
          
          <p class="para-space"><?php echo the_content(); ?></p>
          <?php endwhile; endif; ?>
          <?php  
	$aboutusitem = array( 'post_type' => 'about_us_item', 'posts_per_page' => 3 );

	$the_query = new WP_Query( $aboutusitem );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
	
	?>
          <?php  
	$aboutusitem_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$aboutusitem_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	 ?>
          <div class="about-item"> <i class="icofont icofont-hat"></i>
            <h4><?php echo the_title(); ?></h4>
            <p><?php // echo the_content();
$content = get_the_content(); 
echo wp_filter_nohtml_kses( $content );
			?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
     
</div>



 <div class="col-lg-5">
        <?php  
	$aboutusar = array( 'post_type' => 'about_us', 'posts_per_page' => 1 );

	$the_queryar = new WP_Query( $aboutusar );

 	if ($the_queryar->have_posts()) : while ($the_queryar->have_posts()) : $the_queryar->the_post(); 
	
	?>
        <?php  
	$aboutusar_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$aboutusar_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	 ?>
        <div class="about-img animated fadeInRightShort slow"> 
		<img src="<?php echo $aboutusar_image; ?>" alt=""> 
		</div>
        <?php endwhile; endif; ?>
      </div>
    
	


	 </div>
     
	
	</div>
  </div>
</section>

<!-- Video Start -->
<!-- Video Start -->


<section class="video-section parallax overlay-black">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
	  
        <div class="video-col">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-col">
                        <h2>Our University Campus</h2>
                        <a class="demo" href="https://youtu.be/OOHxsbhvrUY"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
          <?php   dynamic_sidebar('homepage_video');   ?>
          <!--- <h2>Our University Campus</h2>
                        <a class="demo" href="https://youtu.be/OOHxsbhvrUY"><i class="fa fa-play-circle" aria-hidden="true"></i></a>---> 
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Course Start -->
<section class="course-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="section-title">
		<div class="title-style">
                            <h2>Our courses</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
          <?php   dynamic_sidebar('our_courses');   ?>
        </div>
      </div>
    </div>
    <div class="row animatedParent animateOnce">
      <?php   

	$args = array( 'post_type' => 'our_courses', 'posts_per_page' => 6 );

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
              <!---<div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>--->
              
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php echo  the_title(); ?></a></h4>
            
            <a class="btn btn-primary my-btn" href="<?php the_permalink(); ?>" role="button">Details</a> </div>
        </div>
      </div>
      <?php   endwhile; endif; ?>
      <!----<div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-col animated fadeInUpShort slow delay-250">
                        <div class="course-item">
                            <div class="course-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/course/2.jpg" alt="">
                                <div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>
                                <div class="over-shadow"></div>
                            </div>
                            <h4><a href="course-single.html">Biological Sciences</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam explicabo vero optio provident, molestias quo expedita quas minus sunt harum porro.</p>
                            <a class="btn btn-primary my-btn" href="course-single.html" role="button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-col animated fadeInUpShort slow delay-500">
                        <div class="course-item">
                            <div class="course-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/course/3.jpg" alt="">
                                <div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>
                                <div class="over-shadow"></div>
                            </div>
                            <h4><a href="course-single.html">Accounting and Finance</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam explicabo vero optio provident, molestias quo expedita quas minus sunt harum porro.</p>
                            <a class="btn btn-primary my-btn" href="course-single.html" role="button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-col animated fadeInUpShort slow delay-750">
                        <div class="course-item">
                            <div class="course-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/course/4.jpg" alt="">
                                <div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>
                                <div class="over-shadow"></div>
                            </div>
                            <h4><a href="course-single.html">Materials Technology</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam explicabo vero optio provident, molestias quo expedita quas minus sunt harum porro.</p>
                            <a class="btn btn-primary my-btn" href="course-single.html" role="button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-col animated fadeInUpShort slow delay-1000">
                        <div class="course-item">
                            <div class="course-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/course/5.jpg" alt="">
                                <div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>
                                <div class="over-shadow"></div>
                            </div>
                            <h4><a href="course-single.html">Computer Science</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam explicabo vero optio provident, molestias quo expedita quas minus sunt harum porro.</p>
                            <a class="btn btn-primary my-btn" href="course-single.html" role="button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-col animated fadeInUpShort slow delay-1250">
                        <div class="course-item">
                            <div class="course-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/course/6.jpg" alt="">
                                <div class="course-cost">
                                    <h2>for 3 years</h2>
                                </div>
                                <div class="over-shadow"></div>
                            </div>
                            <h4><a href="course-single.html">Civil Engineering</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam explicabo vero optio provident, molestias quo expedita quas minus sunt harum porro.</p>
                            <a class="btn btn-primary my-btn" href="course-single.html" role="button">Details</a>
                        </div>
                    </div>
                </div>-----> 
    </div>
  </div>
</section>

<!-- Counter Start -->
<section class="counter-section parallax overlay-black">
  <div class="container">
    <div class="row animatedParent animateOnce">
      <?php
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."site_info where id='1'";
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>
      <div class="col-md-3 col-sm-6 col-6">
        <div class="counter-col animated fadeInUpShort slow">
          <div class="counter"> <i class="icofont icofont-group-students"></i>
            <div class="count"><?php echo $post->our_student; ?></div>
          </div>
          <p>Our students</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <div class="counter-col animated fadeInUpShort slow delay-250">
          <div class="counter"> <i class="icofont icofont-teacher"></i>
            <div class="count"><?php echo $post->our_teacher; ?></div>
          </div>
          <p>Our teachers</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <div class="counter-col animated fadeInUpShort slow delay-500">
          <div class="counter"> <i class="icofont icofont-nurse-alt"></i>
            <div class="count"><?php echo $post->our_staff; ?></div>
          </div>
          <p>Our staffs</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <div class="counter-col animated fadeInUpShort slow delay-750">
          <div class="counter"> <i class="icofont icofont-award"></i>
            <div class="count"><?php echo $post->precious_awards; ?></div>
          </div>
          <p>Precious Awards</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Teachers Start -->
<section class="teachers-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="section-title">
		<div class="title-style">
                            <h2>Our teachers</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
          <?php   dynamic_sidebar('our_teacher');   ?>
        </div>
      </div>
    </div>
    <div class="row animatedParent animateOnce">
      <?php   

	$teacher = array( 'post_type' => 'our_teachers', 'posts_per_page' => 4 );

	$the_query = new WP_Query( $teacher );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php  
	$teacher_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$teacher_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	?>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="teachers-col animated fadeInUpShort slow">
          <div class="teacher-img">
		  <img src="<?php echo $teacher_image; ?>" alt=""> 
            <!---<div class="social-group">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>---> 
            <a href="<?php the_permalink(); ?>"><i class="fa fa-plus link" aria-hidden="true"></i></a> </div>
          <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
        </div>
      </div>
      <?php   endwhile; endif; ?>
      
      <!----<div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teachers-col animated fadeInUpShort slow delay-250">
                        <div class="teacher-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/teachers/2.jpg" alt="">
                            <div class="social-group">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <a href="teacher-single.html"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                        </div>
                        <h4><a href="teacher-single.html">Robart Devil</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teachers-col animated fadeInUpShort slow delay-500">
                        <div class="teacher-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/teachers/3.jpg" alt="">
                            <div class="social-group">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <a href="teacher-single.html"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                        </div>
                        <h4><a href="teacher-single.html">Nicolas Julio</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teachers-col animated fadeInUpShort slow delay-750">
                        <div class="teacher-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/teachers/4.jpg" alt="">
                            <div class="social-group">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <a href="teacher-single.html"><i class="fa fa-plus link" aria-hidden="true"></i></a>
                        </div>
                        <h4><a href="teacher-single.html">Alex Snap</a></h4>
                    </div>
                </div>----> 
    </div>
  </div>
</section>

<!-- Separator Start --> 
<!---<section class="separator-section overlay-black">
        <div class="container">
            <div class="row justify-content-center animatedParent animateOnce">
                <div class="col-lg-5 col-md-5">
                    <div class="separator-col animated fadeInUpShort slow">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/students.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="separator-col">
                        <h4>REQUEST for a INFORMATION</h4>
                        <form> 
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select class="custom-select">
                                      <option selected>Select Department</option>
                                      <option value="1">BBA</option>
                                      <option value="2">CSE</option>
                                      <option value="3">English</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-select">
                                      <option selected>Academic Year</option>
                                      <option value="1">2017</option>
                                      <option value="2">2016</option>
                                      <option value="3">2015</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-default my-btn" type="submit">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>-----> 

<!-- Portfolio Start -->
<!--<section class="portfolio-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="section-title">
		<div class="title-style">
                            <h2>Our Portfolio</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
		
          <?php   dynamic_sidebar('our_portfolio');   ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="portfolio-col"> 
          <!-- Filter Nav --> 
          <!---<ul class="portfolio-nav">
                            <li data-filter="all"> All </li>
                            <li data-filter="1"> Web Design </li>
                            <li data-filter="2"> Grapich </li>
                            <li data-filter="3"> Mobile app </li>
                        </ul>---> 
          <!-- Filter Content -->
          <div class="filtr-container">
            <?php   

	$portfolio = array( 'post_type' => 'our_portfolio', 'posts_per_page' => 6 );

	$the_query = new WP_Query( $portfolio );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php  
	$portfolio_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$portfolio_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	?>
            <div class="col-sm-4 col-md-4 filtr-item" data-category="3, 2" data-sort="value">
              <div class="img-hover-item clearfix"> <img src="<?php echo $portfolio_image; ?>" alt="">
                <div class="hover-item-info">
                  <h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                </div>
                <a href="<?php echo $portfolio_image; ?>" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a> </div>
            </div>
            <?php   endwhile; endif; ?>
            
            <!---- <div class="col-sm-4 col-md-4 filtr-item" data-category="2, 1" data-sort="value">
                                <div class="img-hover-item clearfix">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/2.jpg" alt="">
                                    <div class="hover-item-info">
                                        <h3><a href="portfolio-single.html">Here Is The Title</a></h3>
                                    </div>
                                    <a href="images/portfolio/2.jpg" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 filtr-item" data-category="3, 1" data-sort="value">
                                <div class="img-hover-item clearfix">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/3.jpg" alt="">
                                    <div class="hover-item-info">
                                        <h3><a href="portfolio-single.html">Here Is The Title</a></h3>
                                    </div>
                                    <a href="images/portfolio/3.jpg" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 filtr-item" data-category="1, 2" data-sort="value">
                                <div class="img-hover-item clearfix">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/4.jpg" alt="">
                                    <div class="hover-item-info">
                                        <h3><a href="portfolio-single.html">Here Is The Title</a></h3>
                                    </div>
                                    <a href="images/portfolio/4.jpg" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 filtr-item" data-category="3, 2" data-sort="value">
                                <div class="img-hover-item clearfix">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/5.jpg" alt="">
                                    <div class="hover-item-info">
                                        <h3><a href="portfolio-single.html">Here Is The Title</a></h3>
                                    </div>
                                    <a href="images/portfolio/5.jpg" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 filtr-item" data-category="3, 1" data-sort="value">
                                <div class="img-hover-item clearfix">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/6.jpg" alt="">
                                    <div class="hover-item-info">
                                        <h3><a href="portfolio-single.html">Here Is The Title</a></h3>
                                    </div>
                                    <a href="images/portfolio/6.jpg" data-lightbox="lightbox" data-title="My caption"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>------> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

<!-- Testimonial Start -->
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
              <div class="test-image"> <img src="<?php echo $testimonial_image; ?>" alt="">
                <h4><?php echo the_title(); ?></h4>
                <span><?php echo  get_post_meta( get_the_ID(), 'Designation', true); ?></span> </div>
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

<!-- Blog Start -->
<section class="blog-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="section-title">
		<div class="title-style">
                            <h2>Our latest news</h2>
                            <div class="title-icon">
                                <i class="icofont icofont-hat"></i>
                            </div>
                        </div>
          <?php   dynamic_sidebar('our_latest_news');   ?>
        </div>
      </div>
    </div>
    <div class="row animatedParent animateOnce">
      <?php   

	$latestnews = array( 'post_type' => 'latest_news', 'posts_per_page' => 6 );

	$the_query = new WP_Query( $latestnews );

 	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php  
	$latestnews_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

	$latestnews_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));

	 
	?>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="blog-col animated fadeInUpShort slow">
          <div class="blog-img"> <img src="<?php echo $latestnews_image; ?>" alt=""> 
            <!---<div class="post-date">
                                <h3>27 June, <span>2018</span></h3>
                            </div>--->
            <div class="overlay"></div>
          </div>
          <div class="info-bar clearfix">
                             <ul>
                               <li><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10 Comments</a></li>
                                 <li><i class="fa fa-pencil" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                 <li><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#">2 Hours Ago</a></li>
                             </ul>
                         </div>
          <h4><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h4>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
      <?php  endwhile; endif; ?>
      
      <!---<div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="blog-col animated fadeInUpShort slow delay-250">
                         <div class="blog-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/2.jpg" alt="">
                            <div class="post-date">
                                <h3>28 June, <span>2018</span></h3>
                            </div>
                            <div class="overlay"></div>
                         </div>
                         <div class="info-bar clearfix">
                             <ul>
                                 <li><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10 Comments</a></li>
                                 <li><i class="fa fa-pencil" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                 <li><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#">2 Hours Ago</a></li>
                             </ul>
                         </div>
                         <h4><a href="blog-single.html">Fully responsive layout</a></h4>
                         <p>There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected.</p>
                     </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="blog-col animated fadeInUpShort slow delay-500">
                         <div class="blog-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog/3.jpg" alt="">
                            <div class="post-date">
                                <h3>29 June, <span>2018</span></h3>
                            </div>
                            <div class="overlay"></div>
                         </div>
                         <div class="info-bar clearfix">
                             <ul>
                                 <li><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="#">10 Comments</a></li>
                                 <li><i class="fa fa-pencil" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                 <li><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#">2 Hours Ago</a></li>
                             </ul>
                         </div>
                         <h4><a href="blog-single.html">Fully responsive layout</a></h4>
                         <p>There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected.</p>
                     </div>
                </div>----> 
    </div>
  </div>
</section>

<!-- Subscribe Start --> 
<!----<section class="subscribe-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="subscribe-col text-center">
                        <h3>subscribe our newsletter</h3>
                        <form>
                            <div class="form-row">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Enter Your Email">
                                    <span class="input-group-addon">Subscribe</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>----->

<?php get_footer(); ?>
