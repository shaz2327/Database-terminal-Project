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

	<h1>Enter phone_no</h1>
	
	<form  action="action.php" method="post">
		
       
		
		
		<input type="text" name="phone_number" id="phone_number"  placeholder="Enter phone_number"><br>
       
		
       

		<input type="submit" name="submit">


	</form>


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