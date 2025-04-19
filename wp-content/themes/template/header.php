<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>

<style>
 .menu-top-menu-container > ul li {padding: 0 17px 0;
 color: black;
 }
 .logo-content{    padding: 4px 8px 4px;
    color: #008dd2;
    position: relative;
    left: 72px;
  
}



 
 .formmm .wpcf7 {
   /* margin: 0 -69px 0;*/
 
}

 
.menu-top-menu-container > ul li a {color:black;}

#menu-top-menu {
   
  
	display: -webkit-inline-box!important;
}

@media only screen and (max-width: 767px)
{
	
	#menu-top-menu {  display: block;}
  
	.menu-top-menu-container > ul li {
    padding: 0 30px 0;
    color: black;
    display: inline-block;
    width: 100%;
}


.formmm {
    width: 100%;
    left: 0!important;
    top:-407!important;
}
}@media (max-width: 991px) {
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block!important;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
   
    .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navbar-text {
        float: none;
        margin: 15px 0;
    }
    .navbar-collapse.collapse.in { 
        display: block!important;
    }
    
}
@media only screen and (max-width: 769px)
{
.navbar-dark .navbar-toggler {
        display: block;
   
    width: 14%;

}


.navbar-expand-md .navbar-toggler {
    display: block;
}


.menu-top-menu-container > ul li {
    padding: 0 30px 0;
    color: black;
    display: inline-block;
    width: 100%;
}



}
</style>
</head>
 <body>
 <header class="main-herader"> 
   <div class="header-topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-8">
          <div class="header-topbar-col clearfix">
            <ul>
<?php
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."site_info where id='1'";
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>
				<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $post->contact; ?></li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $post->email; ?></li>
				 
			</ul>
          </div>
        </div>
        <div class="col-lg-4 ml-auto col-md-6 col-sm-4">
          <div class="header-topbar-col clearfix">
            <div class="social-link-group">
			<a href="<?php echo $post->facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true">
			</i></a> 
			<a href="<?php echo $post->twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
			<a href="<?php echo $post->linkedin; ?>" target="_blank">
			<i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="<?php echo $post->google; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </div>
          </div>
		  
        </div>
      </div>
    </div>
  </div>
   <nav class="navbar navbar-expand-md nav navbar-dark">
    <div class="container"> 
	<a class="navbar-brand" href="<?php echo site_url(); ?>"> 
	<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $post->logo; ?>" alt="">
	<!---<span class="logo-content">Tutor sigma</span> ---></a>
	
	<?php endforeach; ?> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <?php
$defaults = array(
	'theme_location'  => 'primary',
	'menu'            => '',
);
wp_nav_menu( $defaults );
?>
        </ul>
      </div>
    </div>
  </nav>
</header>



