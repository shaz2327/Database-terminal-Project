<?php
    
   
   $route_id=$_POST['route_id'];
   $driver_id=$_POST['driver_id'];
 
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into bus(route_id,driver_id) values ('{$route_id}','{$driver_id}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/bus/show.php');
mysqli_close($conn);




?>