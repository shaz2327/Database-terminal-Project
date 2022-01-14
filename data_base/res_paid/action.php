<?php
    
   
   $paid=$_POST['paid'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into res_paid(paid) values ('{$paid}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/res_paid/show.php');
mysqli_close($conn);




?>