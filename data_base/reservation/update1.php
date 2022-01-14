<?php
    
    $res_id=$_POST['res_id'];
    $c_id=$_POST['c_id'];
    $route_id=$_POST['route_id'];
    $seat_no=$_POST['seat_no'];
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE reservation set c_id='{$c_id}',route_id='{$route_id}',seat_no='{$seat_no}' where res_id={$res_id}";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/reservation/show.php');
mysqli_close($conn);




?>