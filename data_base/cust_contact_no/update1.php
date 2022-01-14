<?php
    
    $c_id=$_POST['c_id'];
    $phone_number=$_POST['phone_number'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE cust_contact_no set phone_number='{$phone_number}' where c_id={$c_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/cust_contact_no/show.php');
mysqli_close($conn);




?>