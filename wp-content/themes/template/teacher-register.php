<?php
/*
Template Name: Teacher Register
*/
 
if(isset($_POST['postteacher']))
 	{
		global $wpdb;
$target_file = time()."_".$_FILES['upload_cv']["name"];
move_uploaded_file($_FILES["upload_cv"]["tmp_name"], "wp-content/uploads/resumes/".$target_file);
		
		$result  = $wpdb->query("INSERT INTO ".$wpdb->prefix."reg_teacher (name , email , subject, grade, qualification, teaching_exp, city, phone, upload_cv) VALUES ('".$_POST['fullname']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['grade']."', '".$_POST['qualification']."', '".$_POST['teaching_exp']."', '".$_POST['city']."', '".$_POST['phone']."', '".$target_file."')");


$to = 'dranita.tutorsigma@gmail.com';
$subject = 'The subject';
$body = 'The email body content';
$headers = array('Content-Type: text/html; charset=UTF-8');
 
wp_mail( $to, $subject, $body, $headers );


wp_redirect('http://tutorsigma.com/thank-you/');
	}
 

get_header(); ?>
<style>
.hp {
width:100%;

    margin-bottom: 30px;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
}


.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}

#vfb-5 {
    padding: 5px 136px 5px;
    margin: 7px 85px 7px;
}

</style>
<div class="container">
<div class="col-md-12">
    <div class="form-area">  
        <form role="form" action="" method="POST" enctype="multipart/form-data">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Teacher Registration</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<select name="subject" id="subject" class="form-control" required>
                        <option value="0">Select Subject</option>
                        <option value="Mathes">Mathes</option>
                        <option value="Science">Science</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="English">English</option>
                        <option value="Social Science">Social Science</option>
                      </select>
					</div>
					<div class="form-group">
						<select name="grade" id="grade" class="form-control" required>
                        <option value="0">Select Grade</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                      </select>
					</div>
					<div class="form-group">
						<select name="qualification" id="qualification" class="form-control" required>
                        <option value="0">Select Qualification</option>
                        <option value="BE">BE</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="M.Tech">M.Tech</option>
                        <option value="Bsc">Bsc</option>
                        <option value="Msc">Msc</option>
                        <option value="Phd">Phd</option>
                      </select>
					</div> 
					<div class="form-group">
						<select name="teaching_exp" id="teaching_exp" class="form-control" required>
                        <option value="0">Select Teaching Experience</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
					</div> 
					<div class="form-group">
						<input type="text" class="form-control" id="city" name="city" placeholder="City" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" id="upload_cv" name="upload_cv" placeholder="Upload CV" required>
					</div>
 <button type="submit" id="submit" name="postteacher" class="btn btn-primary pull-right" style="float: left;">Submit Form</button>					
    </div>    
       
        </form>
    </div>
</div>
<?php get_footer(); ?>
