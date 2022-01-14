<?php
    
   
   $c_id=$_POST['c_id'];
   $route_id=$_POST['route_id'];
 $seat_no=$_POST['seat_no'];
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into reservation(c_id,route_id,seat_no) values ('{$c_id}','{$route_id}','{$seat_no}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/reservation/show.php');
mysqli_close($conn);




?>