<?php
    
   
   $faculty=$_POST['faculty'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into type_1(faculty) values ('{$faculty}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/type_1/show.php');
mysqli_close($conn);




?>