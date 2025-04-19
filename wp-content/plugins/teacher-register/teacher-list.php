<?php
$plugins_url = plugins_url();
$current_Plugin_folder_name = "teacher-register";
$Page_Title = "Teacher Registration";
$page_url = 'teacher-register';
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

 <div tabindex="0" aria-label="Main content" id="wpbody-content" style="overflow: hidden;">

 <div class="wrap">
 <h2><?php echo $Page_Title ; ?>  List  <a class="add-new-h2" href="<?php echo $url = admin_url(); ?>list.php?page=mt-top-level-handle-<?php echo $page_url; ?>&action=add">Add New   </a></h2>
  <div class="wpseotab general active">

 
                
                
<?php  
  if($success_message!='') { ?>  <div class="updated below-h2" id="message"><p>  <?php echo $success_message; ?></p></div> <?php } ?> 
                
                
 
				<table class="form-table" id="myTable" style="width:100%!important">
                 <thead>
                 <tr>
                 <br />
 				<th scope="row" style="width:5%!important"><label for="yoast_wpseo_focuskw">S No.</label> </th>
				<th scope="row" style="width:20%!important"><label for="yoast_wpseo_focuskw">Name</label> </th>
                <th scope="row" style="width:20%!important"><label for="yoast_wpseo_focuskw">Email Id</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Subject</label> </th> 
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Teaching Experience</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">City</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Phone</label> </th>
        <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">CV</label> </th>
       <!-- <th scope="row" style="width:25%!important"><label for="yoast_wpseo_focuskw">Action</label> </th>--->
                </tr>
 				</thead>
                 <tbody>
                <?php
						global $wpdb;
 						$querystr = "SELECT  * from  ".$wpdb->prefix."reg_teacher order by id DESC";
						$Bannerimage = $wpdb->get_results($querystr, OBJECT);
						$i=0;
						foreach($Bannerimage as $post):
						$i=$i+1;
  			    ?>
 
            	<tr <?php if($i%2=='0') { ?>  style="background-color:white!important;"<?Php } ?>>
                    <td width="5%" > <?php echo $i; ?></td>
                    <td width="10%"><?php echo $post->name; ?></td>
                    <td width="10%"><?php echo $post->email; ?></td>
                   <td><?php echo $post->qualification; ?></td>
                   <td><?php echo $post->teaching_exp; ?></td>
                   <td><?php echo $post->city; ?></td>
                   <td><?php echo $post->phone; ?></td>
                   <td><a download href="../wp-content/uploads/resumes/<?php echo $post->upload_cv; ?>"><?php echo $post->upload_cv; ?></a></td>
                  <!---  <td> 
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
 