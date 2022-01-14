<?php
    
   
   $departure_time=$_POST['departure_time'];
   $arrival_time=$_POST['arrival_time'];
 $day=$_POST['day'];
 $departure_place=$_POST['departure_place'];
 $arrival_place=$_POST['arrival_place'];
 $ticket_price=$_POST['ticket_price'];
 


$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql1="INSERT into route(departure_time,arrival_time,day,departure_place,arrival_place,ticket_price) values ('{$departure_time}','{$arrival_time}','{$day}','{$departure_place}','{$arrival_place}','{$ticket_price}') ;";



$result=mysqli_query($conn,$sql1) or die ("Query error");

header('Location: http://localhost/data_base/route/show.php');
mysqli_close($conn);




?>