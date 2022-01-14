<?php
    
    $c_id=$_POST['c_id'];
    $name=$_POST['name'];
    $route=$_POST['route'];
    $type=$_POST['type'];
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE customer set name='{$name}',route='{$route}',type='{$type}' where c_id={$c_id}";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/customer/show.php');
mysqli_close($conn);




?>