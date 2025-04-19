<?php
/*
Template Name: Student Register
*/
 
if(isset($_POST['submitnow']))
 	{
		global $wpdb;
		$result  = $wpdb->query("INSERT INTO ".$wpdb->prefix."reg_student (fullname , emailid , phonenumber, grade, subject) VALUES ('".$_POST['fullname']."', '".$_POST['emailid']."', '".$_POST['phonenumber']."', '".$_POST['grade']."', '".$_POST['subject']."')");


$to = 'shailendra.sharma105@gmail.com';
$subject = 'The subject';
$body = 'The email body content';
$headers = array('Content-Type: text/html; charset=UTF-8');
 
wp_mail( $to, $subject, $body, $headers );

wp_redirect('http://carpediemsocial.com/tutorsigma/thank-you/');
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
        <form role="form" action="" method="POST">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Student Registration</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
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
						<select name="subject" id="subject" class="form-control" required>
                        <option value="0">Select Subject</option>
                        <option value="Mathes">Mathes</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Science">Science</option>
                        <option value="Social Science">Social Science</option>
                      </select>
					</div> 
 <button type="submit" id="submit" name="submitnow" class="btn btn-primary pull-right" style="float: left;">Submit Form</button>					
    </div>    
       
        </form>
    </div>
</div>

<?php get_footer(); ?>
