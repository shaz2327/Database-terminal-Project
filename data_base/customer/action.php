<?php
    
   
   $name=$_POST['name'];
   $route=$_POST['route'];
 $type=$_POST['type'];
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into customer(name,route,type) values ('{$name}','{$route}','{$type}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/customer/show.php');
mysqli_close($conn);




?>