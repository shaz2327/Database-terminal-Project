<?php
    
    $c_id=$_POST['c_id'];
    $designation=$_POST['designation'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE type_2 set designation='{$designation}' where c_id={$c_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/type_2/show.php');
mysqli_close($conn);




?>