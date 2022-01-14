<?php
    
    $res_id=$_POST['res_id'];
    $pending=$_POST['pending'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE res_pending set pending='{$pending}' where res_id={$res_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/res_pending/show.php');
mysqli_close($conn);




?>