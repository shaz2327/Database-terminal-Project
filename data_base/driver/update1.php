<?php
    
    $driver_id=$_POST['driver_id'];
    $name=$_POST['name'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE driver set name='{$name}' where driver_id={$driver_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/driver/show.php');
mysqli_close($conn);




?>