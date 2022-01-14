<?php
    
   
   $name=$_POST['name'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into driver(name) values ('{$name}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/driver/show.php');
mysqli_close($conn);




?>