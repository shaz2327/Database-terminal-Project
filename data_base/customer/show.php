<!DOCTYPE html>
<html>
<head>
	<title>Display result</title>
  <link rel="stylesheet" type="text/css" href="\data_base\my_style.css">
	<style >
		table
		{
			border-collapse: collapse;
			border-spacing: 10px 10px;
			margin: 0px auto;
		}
		table th, table td
		{
			width: 150px;
			text-align: center;
		}
	</style>
</head>
<body>


        <?php

            $conn=mysqli_connect("localhost","root","","data_base") or die("Database not connected");

            $sql="Select * from customer";

            $result=mysqli_query($conn,$sql) or die ("Query not run");

            if(mysqli_num_rows($result) > 0) {
        ?>

	<table border="1px solid black">
		<thead>
			<th>c_id</th>
			<th>name</th>
			<th>route</th>
			<th>type</th>
			
     
		
		</thead>
		<TBODY>

       <?php 

                while($row=mysqli_fetch_assoc($result)){
       ?>
			<tr>
                <td><?php echo $row['c_id'];  ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['route']; ?></td>
                <td><?php echo $row['type']; ?></td>
                
            
				

		    </tr>
                <?php } ?>
       
		</TBODY>
	</table>

               

            <?php }
            mysqli_close($conn);
            ?>

                <a href="input.php">ENTER CUSTOMER INFORMATION</a>     <BR> 
				<a href="updateValue.php">EDIT CUSTOMER INFORMATION</a><BR>
				<a href="delete.php">DELETE CUSTOMER INFORMATION</a>
		
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