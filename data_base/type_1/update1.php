<?php
    
    $c_id=$_POST['c_id'];
    $faculty=$_POST['faculty'];
    
    
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE type_1 set faculty='{$faculty}' where c_id={$c_id} ;";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/type_1/show.php');
mysqli_close($conn);




?>