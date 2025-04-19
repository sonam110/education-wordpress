<?php
$plugins_url = plugins_url();
$current_Plugin_folder_name = "site-info";
$Page_Title = "Site Information";
$page_url = 'site-info';

if($_GET['message']=='yes')
{
	$success_message= $_GET['action']." Successfully";
}
if(isset($_POST['add']))
{
global $wpdb;

$target_file = time()."_".$_FILES['banner_image']["name"];
move_uploaded_file($_FILES["banner_image"]["tmp_name"], "../wp-content/uploads/".$target_file);


$result  = $wpdb->query("INSERT INTO ".$wpdb->prefix."site_info (email, contact, address, site_desc, facebook, twitter, linkedin, google ) VALUES ('".$_POST['email']."' , '".$_POST['contact']."', '".$_POST['address']."', '".$_POST['site_desc']."', '".$_POST['facebook']."', '".$_POST['twitter']."', '".$_POST['linkedin']."', '".$_POST['google']."')");
?>
		
		
<script> window.location='<?php echo $url = admin_url(); ?>/admin.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Added';</script>
        
        
  <?php
}


if(isset($_POST['edit']))
{
	
		if($_FILES['logo']["name"]!='')
		{
		$target_file = time()."_".$_FILES['logo']["name"];
		move_uploaded_file($_FILES["logo"]["tmp_name"], "../wp-content/uploads/".$target_file);
		}
		else
		{
		$target_file = $_POST['target_file'];
		}
		
		if($_FILES['footer_logo']["name"]!='')
		{
		$footer_target_file = time()."_".$_FILES['footer_logo']["name"];
		move_uploaded_file($_FILES["footer_logo"]["tmp_name"], "../wp-content/uploads/".$footer_target_file);
		}
		else
		{
		$footer_target_file = $_POST['footer_target_file'];
		}
 	global $wpdb;
	$result  = $wpdb->query("UPDATE ".$wpdb->prefix."site_info set email='".$_POST['email']."' ,  contact='".$_POST['contact']."',  address='".$_POST['address']."',  site_desc='".$_POST['site_desc']."',  facebook='".$_POST['facebook']."',  twitter='".$_POST['twitter']."',  linkedin='".$_POST['linkedin']."',  google='".$_POST['google']."',  our_student='".$_POST['our_student']."',  our_teacher='".$_POST['our_teacher']."',  our_staff='".$_POST['our_staff']."',  precious_awards='".$_POST['precious_awards']."',  logo='".$target_file."',  footer_logo='".$footer_target_file."'  where id='1' ");
 	 
?>
		<script> window.location='<?php echo $url = admin_url(); ?>/admin.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Updated';</script>
  <?php
}

elseif(($_REQUEST['action']=='delete'))
	{	global $wpdb;
			 	 $result  = $wpdb->query("delete from ".$wpdb->prefix."index_slider where id='".$_GET['id']."'");			
?>
		<script> window.location='<?php echo $url = admin_url(); ?>/admin.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Deleted';</script>
  <?php
}
?>
<script src="<?php echo $url = plugin_dir_url( $file ).$current_Plugin_folder_name; ?>/js/jquery.min.js"></script>
<script src="<?php echo $url = plugin_dir_url( $file ).$current_Plugin_folder_name; ?>/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href='<?php echo $url = plugin_dir_url( $file ).$current_Plugin_folder_name; ?>/css/jquery.dataTables.min.css'>

  <script>
  $(function(){
    $("#myTable").dataTable();
  })
  </script>

<script type="text/javascript">
function del(url)
{  
	if(	confirm('Really want to delete this.') )
	{
		window.location=url;
	}
}
</script>
<?php
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."site_info where id='1'";
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>
<form id="post" method="post" action="" name="post" enctype="multipart/form-data">
<div id="wpbody">
    <div tabindex="0" aria-label="Main content" id="wpbody-content" style="overflow: hidden;">
 <div class="wrap">
<h2>Add <?php echo $Page_Title   ?></h2>
 <div class="wpseotab general active">
				<h4 class="wpseo-heading" style="display: none;">General</h4>
				<table class="form-table">
                <tr>
                    <th scope="row"><label for="yoast_wpseo_focuskw">Email:</label> </th>
                    <td>  <input type="text" name="email" value="<?php echo $post->email; ?>" class="large-text ui-autocomplete-input" required/> </td>
 				</tr>
            
                <tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Contact No</label> </th>
 					<td>  
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->contact; ?>" name="contact" autocomplete="off" id="banner_image" >
 					</td>
 				</tr>
                <tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Address</label> </th>
 					<td>  
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->address; ?>" name="address" autocomplete="off" id="banner_image" >
 					</td>
 				</tr>     
                <tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Site Description</label> </th>
 					<td>   
					<textarea  required class="large-text ui-autocomplete-input" name="site_desc" autocomplete="off" id="banner_image" ><?php echo $post->site_desc; ?></textarea>
 					</td>
 				</tr>  
				
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Facebook</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->facebook; ?>" name="facebook" autocomplete="off" id="banner_image" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Twitter</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->twitter; ?>" name="twitter" autocomplete="off" id="banner_image" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Linkedin</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->linkedin; ?>" name="linkedin" autocomplete="off" id="banner_image" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Google+</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->google; ?>" name="google" autocomplete="off" id="banner_image" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Our Student</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->our_student; ?>" name="our_student" autocomplete="off" id="our_student" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Our Teacher</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->our_teacher; ?>" name="our_teacher" autocomplete="off" id="our_teacher" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Our Staff</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->our_staff; ?>" name="our_staff" autocomplete="off" id="our_staff" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Precious Awards</label> </th>
 					<td>   
					<input type="text"  required class="large-text ui-autocomplete-input" value="<?php echo $post->precious_awards; ?>" name="precious_awards" autocomplete="off" id="precious_awards" >
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Header Logo</label> </th>
 					<td>   
					<input type="file"  class="large-text ui-autocomplete-input" value="" name="logo" autocomplete="off" id="logo" >
					<input type="hidden" name="target_file" value="<?php echo $post->logo; ?>"   />
                    <img src="<?php echo $url = admin_url(); ?>../wp-content/uploads/<?php echo $post->logo; ?>" height="100" width="100" />
 					</td>
 				</tr> 
				<tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Footer Logo</label> </th>
 					<td>   
					<input type="file"  class="large-text ui-autocomplete-input" value="" name="footer_logo" autocomplete="off" id="footer_logo" >
					<input type="hidden" name="footer_target_file" value="<?php echo $post->footer_logo; ?>"   />
                    <img src="<?php echo $url = admin_url(); ?>../wp-content/uploads/<?php echo $post->footer_logo; ?>" height="100" width="100" />
 					</td>
 				</tr>
 <?php endforeach; ?> 
         </table>

			</div>

 <div id="poststuff">

<div class="metabox-holder columns-2" id="post-body">

 <div id="post-body-content">

<input type="submit" accesskey="p" value="Publish" class="button button-primary button-large" id="publish" name="edit">
</div>
<br class="clear">
</div>
</div>
<div class="clear"></div>
</div> 
<div class="clear">
</div>
</div>
</div>
</form>
