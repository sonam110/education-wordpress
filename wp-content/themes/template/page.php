<?php
get_header();
 ?>
<div class="container">
<?php   if (have_posts()) : while (have_posts()) : the_post();
?>

  <div class="col-md-12">
    <div class="right-box">
      <div class="pahge-tittle">
			<h1><?php the_title(); ?></h1>                   
      </div>
      <!--- <div class="page-imge-tittle"> 
      <img src="<?php echo get_template_directory_uri(); ?>/images/students.png" width="730" height="200" class="img-responsive"/> </div> --->     
	 <style>   	 .main-herader .navbar {    border-bottom: 1px solid #00000024;    box-shadow: 0px 1px #8888882b;}.right-box{ margin: 34px;}
			.contact-page-bh input{       
				width: 100%;                        
			    height: 40px;           
			} 
			.contact-page-bh label {        
				width: 100% 
			} 
			.contact-page-bh textarea{                   
				width: 100%; 
			}
			.contact-page-bh  .wpcf7-submit{                                                
				width: 18% !important;
			    height: 40px !important;                
			}
			@media only screen and (max-width:767px) {
				.contact-page-bh .wpcf7-submit {
              width: 40% !important;
                 height: 40px !important;
              padding: 0;
           font-size: 13px;}
			}
	 </style>
	 <div class="page-contant contact-page-bh">                                               
   	    <?php the_content(); ?>                              
    </div>
</div>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer();?>