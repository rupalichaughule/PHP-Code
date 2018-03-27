<body>
<form align="center" action="" method="post">
  <input name="search" type="search" autofocus>
  <input type="submit" name="button">
</form>


<?php

 $conn = mysqli_connect("localhost", "root", "", "reg");

if(isset($_POST['button']))
{    

  $search=$_POST['search'];

  $query=mysqli_query($conn,"select * from reg_table where ID like '%{$search}%' || fname like '%{$search}%' ")or die (mysqli_error($conn)); ;

if (mysqli_num_rows($query) > 0) 
{
  while ($row = mysqli_fetch_array($query)) 
  {
    echo "<table><tr><td>".$row['ID']."</td>
              <td>".$row['fname']."</td>
              <td>".$row['lname']."</td>
              <td>".$row['mail']."</td>
              <td>".$row['gender']."</td>
              <td>".$row['dob']."</td>
              <td>".$row['skills']."</td>
              <td>".$row['address']."</td>
              <td>".$row['zip']."</td>
              <td>".$row['cv']."</td>
          </tr></table>";
  }
}
else
{
    echo "No Data Found<br><br>";
}

}
else
{                          
  $query=mysqli_query($conn,"select * from reg_table")or die(mysqli_error());;

  while ($row = mysqli_fetch_array($query)) {
    echo "<table><tr><td>".$row['ID']."</td>
              <td>".$row['fname']."</td>
              <td>".$row['lname']."</td>
              <td>".$row['mail']."</td>
              <td>".$row['gender']."</td>
              <td>".$row['dob']."</td>
              <td>".$row['skills']."</td>
              <td>".$row['address']."</td>
              <td>".$row['zip']."</td>
              <td>".$row['cv']."</td>
          </tr></table>";
  }
}

//mysqli_close();
?>