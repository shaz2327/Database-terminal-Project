<?php
    
   
   $contact_no=$_POST['contact_no'];
   
 
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into driver_contact_no(contact_no) values ('{$contact_no}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/driver_contact_no/show.php');
mysqli_close($conn);




?>