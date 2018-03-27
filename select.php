<?php
include("connect.php");
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> delete practice </title>
</head>

<body>
 <div class="table-responsive">    
<table border="1" class="table table-hover">
<tr class="danger">
<th>ID</th>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Gender</th>
<th>Date</th>
<th>Skills</th>
<th>Address</th>
<th>Zipcode</th>
<th>CV</th>
<th colspan="2"><a class="btn btn-info btn-md" href="search.php">SEARCH</a></th>
</tr>
<?php
 $query=mysqli_query($conn,"select * from reg_table") or die(mysqli_error());
  while($row=mysqli_fetch_assoc($query))
  {
?>
<tr>
	<td><?php echo $row['ID'];?></td>
 <td><?php echo $row['fname'];?></td>
  <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['mail'];?></td>
     <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['dob'];?></td>
       <td><?php echo $row['skills'];?></td>
        <td><?php echo $row['address'];?></td>
           <td><?php echo $row['zip'];?></td>
            <td><?php echo $row['cv'];?></td>
             

   <td><a class="btn btn-warning" href="edit.php?edt=<?php echo $row['ID']; ?>">EDIT</a></td>
    <td><a class="btn btn-danger" href="delete.php?del=<?php echo $row['ID']; ?>">DELETE</a></td>
</tr>
<?php
  }
?>
</table>
</div>
</body>
</html>