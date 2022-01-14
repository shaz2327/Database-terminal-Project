<!DOCTYPE html>
<html>
<head>
	<title>Input page</title>
    <link rel="stylesheet" type="text/css" href="\data_base\my_style.css">

	<style>
		form,h1
		{
			margin: 0px 0px;
		}
		form input
		{
			width: 200px;
			height: 50px;
			margin: 5px auto;
		}

	</style>
</head>
<body>

        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        
        <input type="text" name="route_id" id="route_id"  placeholder="Enter route_id"><br>
        <input type="submit" name="showbtn" value="SHOW">
        </form>


        <?php

        if(isset($_POST['showbtn'])){
            $route_id=$_POST['route_id'];
            

            $conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

            $sql1="Select * from route where route_id={$route_id}";

            $result=mysqli_query($conn,$sql1) or die ("Query not runiing");

            if(mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_assoc($result)){

        ?>

    <h1>Enter route record</h1>
	<form  action="update1.php" method="post">

    <input type="hidden" name="route_id" id="route_id"  value="<?php echo $row['route_id']?>;"  ><br>
    <input type="text" name="departure_time"  id="departure_time" value="<?php echo $row['departure_time'];  ?>"><br>
    <input type="text" name="arrival_time" id="arrival_time" value="<?php echo $row['arrival_time'];  ?>" ><br>
	<input type="text" name="day" id="day" value="<?php echo $row['day'];  ?>" ><br>
    <input type="text" name="departure_place" id="departure_place" value="<?php echo $row['departure_place'];  ?>" ><br>
	<input type="text" name="arrival_place" id="arrival_place" value="<?php echo $row['arrival_place'];  ?>" ><br>
    <input type="text" name="ticket_price" id="ticket_price" value="<?php echo $row['ticket_price'];  ?>" ><br>	
    
	<input type="submit" name="submit">


	</form>
<?php
                }
            }
            else
            {
                echo "VALUE NOT FOUND ";
            }
        }
     
?>

<nav id="sidebar">
    <ul>
      
      <li><a href="#">HOME</a></li>
      <li><a href="http://localhost/data_base/customer/show.php">Customer</a></li>
      <li><a href="http://localhost/data_base/type_1/show.php">Faculty</a></li>
      <li><a href="http://localhost/data_base/type_2/show.php">Designation</a></li>
      <li><a href="http://localhost/data_base/reservation/show.php">Reservation_Details</a></li>
      <li><a href="http://localhost/data_base/res_paid/show.php">Paid</a></li>
      <li><a href="http://localhost/data_base/res_pending/show.php">Pending</a></li>
      <li><a href="http://localhost/data_base/route/show.php">Route</a></li>
      <li><a href="http://localhost/data_base/cust_contact_no/show.php">Customer_Contact_No</a></li>
      <li><a href="http://localhost/data_base/bus/show.php">Bus_Details</a></li>
      <li><a href="http://localhost/data_base/driver/show.php">Driver_Details</a></li>
      <li><a href="http://localhost/data_base/driver_contact_no/show.php">Driver_Contact_No</a></li>
      
    </ul>
  </nav>  
  <img src="\data_base\images/menu.png" id="menu-btn">




<script >
    
    var sidenav=document.getElementById("sidebar");
    var menu=document.getElementById("menu-btn");
    sidenav.style.right="-350px" ;  

    menu.onclick = function()
    {
      if(sidenav.style.right=="-350px" )
      {
        sidenav.style.right="0px ";
      }
      else
      {
        sidenav.style.right="-350px ";
      }
    }


  </script>


</body>
</html>