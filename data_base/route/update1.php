<?php
    
    $route_id=$_POST['route_id'];
    $departure_time=$_POST['departure_time'];
    $arrival_time=$_POST['arrival_time'];
    $day=$_POST['day'];
    $departure_place=$_POST['departure_place'];
    $arrival_place=$_POST['arrival_place'];
    $ticket_price=$_POST['ticket_price'];
 

$conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

$sql=" UPDATE route set departure_time='{$departure_time}',arrival_time='{$arrival_time}',day='{$day}',departure_place='{$departure_place}',arrival_place='{$arrival_place}',ticket_price='{$ticket_price}' where route_id={$route_id}";



$result=mysqli_query($conn,$sql) or die ("Query error");

header('Location: http://localhost/data_base/route/show.php');
mysqli_close($conn);




?>