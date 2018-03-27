 <?php
   include("connect.php");
error_reporting(0);

$edt=$_GET['edt'];

$fetch=mysqli_query($conn,"select * from reg_table where id='$edt'") or die(mysqli_error());
while($row=mysqli_fetch_assoc($fetch))

{
	$fname=$row['fname'];
	$lname=$row['lname'];
	$mail=$row['mail'];
	$gender=$row['gender'];
	$dob=$row['dob'];
	$skills=explode(',',$row['skills']);
	$add=$row['address'];
	$zip=$row['zip'];
	$cv=$row['cv'];
}
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="file:///F|/htdocs/php/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="file:///F|/htdocs/php/js/bootstrap.min.js" type="text/jscript"></script>
<script src="file:///F|/htdocs/php/js/jquery.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width , initial-scale=1" />

<title>Registration form</title>
</head>

<body>
<div class=" container col-md-6">
<form method="post" align="center" enctype="multipart/form-data"><b>Registration :</b><br />
	<div class="form-group">
    	<label >First Name</label>
        <input type="text" class="form-control" value="<?php echo $fname;?>" name="fname" placeholder="Enter First Name"/>
    </div><br></br>
    <div class="form-group">
    	<label >Last Name</label>
        <input type="text" class="form-control" value="<?php echo $lname;?>" name="lname" placeholder="Enter Last Name"/>
    </div><br></br>
    
   
    
    <div class="form-group">
    	<label>Email</label>
        <input type="email" class="form-control" value="<?php echo $mail;?>"  name="email" placeholder="Enter Email"/>
    </div><br></br>
    
    <div class="form-group"> 
    	<label>Gender</label>
        <input type="radio"  name="gender" value="male" <?php if($gender == 'male'){?> checked="checked" <?php } ?> />Male 
 		<input type="radio"  name="gender" value="female" <?php if($gender == 'female'){?> checked="checked" <?php } ?>/>Female
   
    </div><br></br>
    
    <div class=" form-group registration-date">
    	<label>Date of Birth</label>
        
        <input type="datetime-local" class="form-control" value="<?php echo $dob;?>" name="dob" placeholder="dd/mm/yyyy"/>
    </div>
    <br></br>
    <div class=" form-group registration-date">
    	<label>Technical Skills</label>
        
         <input type="checkbox"  name="skills[]" value="HTML" <?php if(in_array("HTML",$skills)){?> checked="checked" <?php } ?> />HTML
          <input type="checkbox"  name="skills[]" value="CSS" <?php if(in_array("CSS",$skills)){?> checked="checked" <?php } ?> />CSS
          <input type="checkbox"  name="skills[]" value="PHP" <?php if(in_array("PHP",$skills)){?> checked="checked" <?php } ?> />PHP
        
    </div>
    <br></br>
    <div class="form-group">
    	<label>Address</label>
        <textarea class="form-control" cols="10" id="message" name="addr" rows="1"><?php echo $add;?></textarea>
      
</div><br></br>
        
   
    <div class="form-group">
    	<label>Zip code</label>
        <input type="text" class="form-control" value="<?php echo $zip;?>" name="zipcode" placeholder="Zip code"/>
    </div>
  <br></br>
    	<div class="form-group">
						<label>Upload cv</label>
						<input type="file" name="cv"><br><span><?php echo $cv;?></span>
					</div><br></br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
          
        
 </form>
<?php

  if(isset($_POST['submit']))
 {
	 $fname1=$_POST['fname'];
	 $lname1=$_POST['lname'];
	 $mail1=$_POST['email'];
	 $gender1=$_POST['gender'];
	  $date1=$_POST['dob'];
	 $skill1=implode(',',$_POST['skills']);
	
	 $add1=$_POST['addr'];
	
	   $code1=$_POST['zipcode'];
	  
	   $cv=$_FILES['cv']['name'];
	   $cv1=$_FILES['cv']['tmp_name'];
	   $path="fileupload/$cv";
	   move_uploaded_file($cv1,$path);
	   
	  $u=mysqli_query($conn,"update reg_table set fname='$fname1',lname='$lname1',mail='$mail1',gender='$gender1',dob='$date1',skills='$skill1',address='$add1',zip='$code1',cv='$cv' where id='$edt'");
	
	if($u>0)
	{
		echo "updated";
	}
	else
	{
		echo "error";
	}
	   
 }
?>
</div>
</body>
</html>