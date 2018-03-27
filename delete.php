<?php
include("connect.php");
$id=$_GET['del'];
$del=mysqli_query($conn,"delete from reg_table where id='$id'") or die(mysqli_error());
if($del>0)
{
	echo "<script>window.alert('deleted!!!!!!!!')</script>";
	echo "<script>window.location.href='select.php'</script>";
}
else
 {
	  echo "<script>window.alert('error..!!')</script>";
 }
?>