<?php
    
   
   $pending=$_POST['pending'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into res_pending(pending) values ('{$pending}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/res_pending/show.php');
mysqli_close($conn);




?>