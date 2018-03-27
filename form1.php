 <?php
 $conn=mysqli_connect("localhost","root","","reg");
 
 
 if(isset($_POST['submit']))
 {
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $mail=$_POST['email'];
	 $gender=$_POST['gender'];
	  $date=$_POST['dob'];
	 $skill=implode(',',$_POST['skill']);
	
	 $add=$_POST['addr'];
	
	   $code=$_POST['zipcode'];
	  
	   $cv=$_FILES['cv']['name'];
	   $cv1=$_FILES['cv']['tmp_name'];
	   $path="fileupload/$cv";
	   move_uploaded_file($cv1,$path);
	   
	  
	   	 
	   $query=mysqli_query($conn,"insert into reg_table (fname,lname,mail,gender,dob,skills,address,zip,cv) values ('$fname','$lname','$mail','$gender','$date','$skill','$add','$code','$cv')") or die(mysqli_error());
	   
	   if($query>0)
	   {
		   echo "inserted";
	   }
	   else
	   {
		   echo "error";
	   }
	   
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
        <input type="text" class="form-control" name="fname" placeholder="Enter First Name"/>
    </div><br></br>
    <div class="form-group">
    	<label >Last Name</label>
        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name"/>
    </div><br></br>
    
   
    
    <div class="form-group">
    	<label>Email</label>
        <input type="email" class="form-control"  name="email" placeholder="Enter Email"/>
    </div><br></br>
    
    <div class="form-group">
    	<label>Gender</label>
        <input type="radio"  name="gender" value="male" />Male 
 		<input type="radio"  name="gender" value="female" />Female
   
    </div><br></br>
    
    <div class=" form-group registration-date">
    	<label>Date of Birth</label>
        
        <input type="datetime-local" class="form-control" name="dob" placeholder="dd/mm/yyyy"/>
    </div>
    <br></br>
    <div class=" form-group registration-date">
    	<label>Technical Skills</label>
        
        <input type="checkbox"  name="skill[]" value="HTML"/>HTML
        <input type="checkbox"  name="skill[]" value="CSS"/>CSS
        <input type="checkbox"  name="skill[]" value="PHP" />PHP
        
    </div>
    <br></br>
    <div class="form-group">
    	<label>Address</label>
        <textarea class="form-control" cols="10" id="message" name="addr" rows="1"></textarea>
      
</div><br></br>
        
   
    <div class="form-group">
    	<label>Zip code</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zip code"/>
    </div>
  <br></br>
    	<div class="form-group">
						<label>Upload cv</label>
						<input type="file" name="cv">
					</div><br></br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
          
        
 </form>

</div>
</body>
</html>