<?php
    
    $res_id=$_POST['res_id'];
    $paid=$_POST['paid'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE res_paid set paid='{$paid}' where res_id={$res_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/res_paid/show.php');
mysqli_close($conn);




?>