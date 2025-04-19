<?php
$plugins_url = plugins_url();
$current_Plugin_folder_name = "student-register";
$Page_Title = "Student Registration";
$page_url = 'student-register';

if($_GET['message']=='yes')
{
	$success_message= $_GET['action']." Successfully";
}
if(isset($_POST['add']))
{
global $wpdb;

$target_file = time()."_".$_FILES['banner_image']["name"];
move_uploaded_file($_FILES["banner_image"]["tmp_name"], "../wp-content/uploads/photogallery/".$target_file);


$result  = $wpdb->query("INSERT INTO ".$wpdb->prefix."index_slider (status, description, gallery_image ) VALUES ('".$_POST['status']."' , '".$_POST['description']."' , '".$target_file."')");
?>
		
		
<script> window.location='<?php echo $url = admin_url(); ?>/admin.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Added';</script>
        
        
  <?php
}


if(isset($_POST['edit']))
{
	
		if($_FILES['banner_image']["name"]!='')
		{
		$target_file = time()."_".$_FILES['banner_image']["name"];
		move_uploaded_file($_FILES["banner_image"]["tmp_name"], "../wp-content/uploads/photogallery/".$target_file);
		}
		else
		{
		$target_file = $_POST['target_file'];
		}
 	global $wpdb;
	$result  = $wpdb->query("UPDATE ".$wpdb->prefix."index_slider set status='".$_POST['status']."' ,  description='".$_POST['description']."' , gallery_image='".$target_file."' where id=".$_GET['id']) ;
 	 
?>
		<script> window.location='<?php echo $url = admin_url(); ?>/list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Updated';</script>
  <?php
}

elseif(($_REQUEST['action']=='delete'))
	{	global $wpdb;
			 	 $result  = $wpdb->query("delete from ".$wpdb->prefix."index_slider where id='".$_GET['id']."'");			
?>
		<script> window.location='<?php echo $url = admin_url(); ?>/list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&message=yes&action=Deleted';</script>
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
if($_GET['action']=='add') { ?>
  <form id="post" method="post" action="" name="post" enctype="multipart/form-data">
 <div id="wpbody">

 <div tabindex="0" aria-label="Main content" id="wpbody-content" style="overflow: hidden;">

 <div class="wrap">

<h2>Add <?php echo $Page_Title   ?></h2>

 <div class="wpseotab general active">

				<h4 class="wpseo-heading" style="display: none;">General</h4>

				<table class="form-table">
                  <tr>
                        <th scope="row"><label for="yoast_wpseo_focuskw">Title:</label> </th>
                        <td>  <input type="text" name="description" class="large-text ui-autocomplete-input" required/> </td>
 				</tr>
            
                <tr>
 					<th scope="row"><label for="yoast_wpseo_focuskw">Slider Image</label> </th>
 					<td>   <input type="file"  required class="large-text ui-autocomplete-input" value="" name="banner_image" autocomplete="off" id="banner_image" >
 					</td>
 				</tr>
                     
                     
                     
                     <tr>

					<th scope="row"><label for="yoast_wpseo_focuskw">Status</label> </th>
 					<td> 
                    <select name="status" class="form-control">
                                            <option value="1" <?php if($post->status=='1') { echo "selected"; } ?>>Active</option>
                                            <option value="0" <?php if($post->status=='0') { echo "selected"; } ?>>Pending</option>
                                          
                                            
                                     </select>
                     
                       
 					</td>
 				</tr>   

         </table>

			</div>

 <div id="poststuff">

<div class="metabox-holder columns-2" id="post-body">

 <div id="post-body-content">

<input type="submit" accesskey="p" value="Publish" class="button button-primary button-large" id="publish" name="add">
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
<?php }


elseif($_GET['action']=='edit') { 
global $wpdb;
$querystr = "SELECT  * from ".$wpdb->prefix."reg_student where id=".$_GET['id'];
 $Bannerimage = $wpdb->get_results($querystr, OBJECT);
 $i=0;
 foreach($Bannerimage as $post):
 $i=$i+1; 
?>
  <form id="post" method="post" action="" name="post" enctype="multipart/form-data">
 <div id="wpbody">

 <div tabindex="0" aria-label="Main content" id="wpbody-content" style="overflow: hidden;">

 <div class="wrap">

<h2>Edit <?php echo $Page_Title   ?></h2>

 <div class="wpseotab general active">

				<h4 class="wpseo-heading" style="display: none;">General</h4>

			
            <table class="form-table">
            
            
            <tr>
                        <th scope="row"><label for="yoast_wpseo_focuskw">Title:</label> </th>
                        <td>  <input type="text" name="description" value="<?php echo $post->description; ?>" class="large-text ui-autocomplete-input" /> </td>
 				</tr>
            
            
            
            
            
            
            
            
                  
            
					<tr>

					<th scope="row"><label for="yoast_wpseo_focuskw">Banner Image</label> </th>
 					<td> 
                     <input type="file"   class="large-text ui-autocomplete-input" value="" name="banner_image" autocomplete="off" id="banner_image" >
                     
                      <input type="hidden" name="target_file" value="<?php echo $post->gallery_image; ?>"   />
                      <img src="../wp-content/uploads/photogallery/<?php echo $post->gallery_image; ?>" height="100" width="100" />
 					</td>
 				</tr>
                        

    
				<tr>

					<th scope="row"><label for="yoast_wpseo_focuskw">Status</label> </th>
 					<td> 
                    <select name="status" class="form-control">
                                            <option value="1" <?php if($post->status=='1') { echo "selected"; } ?>>Active</option>
                                            <option value="0" <?php if($post->status=='0') { echo "selected"; } ?>>Pending</option>
                                          
                                            
                                     </select>
                     
                       
 					</td>
 				</tr>
                

                  

                

                

                
				 		

                 <?php endforeach; ?>              

                        

                      </table>

			</div>

 <div id="poststuff">

<div class="metabox-holder columns-2" id="post-body">

 <div id="post-body-content">

<input type="submit" accesskey="p" value="Publish" class="button button-primary button-large" id="publish" name="edit">

</div><!-- /post-body-content -->



 <!-- /post-body -->

<br class="clear">

</div><!-- /poststuff -->



</div>

<div class="clear"></div>
</div><!-- wpbody-content -->

<div class="clear">
</div>
</div>
</form>
<?php }
 else { ?>
 <div tabindex="0" aria-label="Main content" id="wpbody-content" style="overflow: hidden;">

 <div class="wrap">
<!---<h2><?php echo $Page_Title ; ?>  List  <a class="add-new-h2" href="<?php echo $url = admin_url(); ?>list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&action=add">Add New   </a></h2>--->
  <div class="wpseotab general active">

 
                
                
<?php  
  if($success_message!='') { ?>  <div class="updated below-h2" id="message"><p>  <?php echo $success_message; ?></p></div> <?php } ?> 
                
                
 
				<table class="form-table" id="myTable" style="width:100%!important">
                 <thead>
                 <tr>
                 <br />
 				<th scope="row" style="width:5%!important"><label for="yoast_wpseo_focuskw">S No.</label> </th>
                 <th scope="row" style="width:20%!important"><label for="yoast_wpseo_focuskw">Full Name</label> </th>
                   <th scope="row" style="width:20%!important"><label for="yoast_wpseo_focuskw">Email Id</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Phone No</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Grade</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Subject</label> </th>
        <!---<th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Action</label> </th>-->
                </tr>
 				</thead>
                 <tbody>
                <?php
						global $wpdb;
 						$querystr = "SELECT  * from  ".$wpdb->prefix."reg_student order by id DESC";
						$Bannerimage = $wpdb->get_results($querystr, OBJECT);
						$i=0;
						foreach($Bannerimage as $post):
						$i=$i+1;
  			    ?>
 
            	<tr <?php if($i%2=='0') { ?>  style="background-color:white!important;"<?Php } ?>>
                    <td width="5%" > <?php echo $i; ?></td>
                    <td width="10%"><?php echo $post->fullname; ?></td>
                    <td width="10%"><?php echo $post->emailid; ?></td>
                   <td><?php echo $post->phonenumber; ?></td>
                   <td><?php echo $post->grade; ?></td>
                   <td><?php echo $post->subject; ?></td>
                   <!--<td> 
<a href="<?php echo $url = admin_url(); ?>list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&action=edit&id=<?php echo $post->id; ?>">
<img src="<?php echo $plugins_url = plugins_url()."/".$current_Plugin_folder_name; ?>/images/edit.png" width="25" height="25" /> </a>






<a style="cursor:pointer" onClick="del('<?php echo $url = admin_url(); ?>list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&action=delete&id=<?php echo $post->id; ?>')"  >
<img src="<?php echo $plugins_url = plugins_url()."/".$current_Plugin_folder_name; ?>/images/delete.png" width="25" height="25" /> </a>
                   	</td>--->
             	</tr>
                   <?php endforeach; ?>
  				  </tbody>
                       </table>
 			</div>
 <div class="clear"></div></div><!-- wpbody-content -->
 <div class="clear"></div></div>
 <?php } ?>
