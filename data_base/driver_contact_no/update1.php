<?php
    
    $driver_id=$_POST['driver_id'];
    $contact_no=$_POST['contact_no'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE driver_contact_no set contact_no='{$contact_no}' where driver_id={$driver_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/driver_contact_no/show.php');
mysqli_close($conn);




?>