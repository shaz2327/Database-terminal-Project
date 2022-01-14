<?php
    
    $bus_id=$_POST['bus_id'];
    $route_id=$_POST['route_id'];
    $driver_id=$_POST['driver_id'];
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE bus set route_id='{$route_id}',driver_id='{$driver_id}' where bus_id={$bus_id}";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/bus/show.php');
mysqli_close($conn);




?>