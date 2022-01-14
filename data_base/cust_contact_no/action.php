<?php
    
   
   $phone_number=$_POST['phone_number'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into cust_contact_no(phone_number) values ('{$phone_number}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/cust_contact_no/show.php');
mysqli_close($conn);




?>