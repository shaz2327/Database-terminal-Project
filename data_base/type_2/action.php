<?php
    
   
   $designation=$_POST['designation'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into type_2(designation) values ('{$designation}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/type_2/show.php');
mysqli_close($conn);




?>