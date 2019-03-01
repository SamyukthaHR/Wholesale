<?php

?>
<body background="hd.jpg">
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WholeSaler-Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				
				<div style="background-color:lightblue">
                <center><h1><font face="verdana" color="black">WHOLESALER LOGIN</font></h1></center>
                </div>

				<h2>The Complete Info</h2>

			</header>
			<!--THE LEFT SIDE MENU IS DUE TO THE ABOVE CODE...!!-->
			<nav id="mainnav">
  				<ul>
                            		<li class="selected-item"><a href="wholesaler_login.php">Home</a></li>
								 	<li class="selected-item"><a href="supplier.php">Suppliers</a></li>
         							<li class="selected-item"><a href="Bills.php">Orders</a></li>
									<li class="selected-item"><a href="Logout.php">Logout</a></li>
          </ul>
			</nav>



			</aside>

		<section id="content" class="column-right">

	    <article>

		<blockquote><p>		<p>&nbsp;</p>

		<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
		<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
		<fieldset>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
					<!--NEVER USE KEY WORDS AS THE VARIABLES AND NAMES... -->
					<legend><strong><h3>NEW SUPPLIER</h3></strong></legend>
					<form action="Add_Suppliers.php" method="POST">
						 <p><label for="SUPPLIER_ID">Supplier-ID:</label>
						<input type="text" name="SUPPLIER_ID" id="SUPPLIER_ID" value="" required/><br /></p>

						<p><label for="NAME">Name:</label>
						<input type="text" name="NAME" id="NAME" value="" required/></input><br /></p>

						<p><label for="Street">Street:</label>
						<input  type="text" name="STREET" id="STREET" value="" required/></input><br /></p>

						<p><label for="CITY">City:</label>
						<input  type="text" name="CITY" id="CITY" value="" required/></input><br /></p>
						
						<p><label for="STATE">State:</label>
						<input  type="text" name="STATE" id="STATE" value="" required/></input><br /></p>
                         

						<p><label for="PHONENUMBER">Phone:</label>
						<input  type="integer"name="PHONENUMBER" id="PHONENUMBER" value="" required/></input><br /></p>
                        
						<p><label for="ORDER_ID">Order_id:</label>
						<input  type="text" name="ORDER_ID" id="ORDER_ID" value="" required/></input><br /></p>

						
						

						<p><input type="submit" name="Add" class="formbutton" value="Add Supplier" /></p>
					</form>

		</fieldset>
		<fieldset>
		<legend><strong><h3>All Suppliers</h3></strong></legend>
		<table>
			<tr>
				<th>SupplierID</th>
          <th>Name</th>
		  <th>Street</th>
		  <th>City</th>
		  <th>State</th>
          <th>PhoneNumber</th>
          <th>Order_Id</th>
			</tr>
			<?php
				$conn = mysqli_connect('localhost','root','','wholesale');
				$sql = "SELECT * FROM SUPPLIER";
				$result = mysqli_query($conn,$sql) or die("Error: $sql. ".mysql_error($conn));
				
				
			?>
			<?php 
			while($row = mysqli_fetch_array($result)){				
			 echo "<tr>";
			echo "<td>",$row['SUPPLIER_ID'],"</td>";
            echo "<td>",$row['NAME'],"</td>";
            echo "<td>",$row['STREET'],"</td>";
            echo "<td>",$row['CITY'],"</td>";
		    echo "<td>",$row['STATE'],"</td>";
		    echo "<td>",$row['PHONENUMBER'],"</td>";
		    echo "<td>",$row['ORDER_ID'],"</td>";
            echo "</tr>";
			
			 }
            ?>			 
			<tr>
		</table>
	</fieldset>
		</article>




			<footer class="clear">
				<p>&copy; WholeSale Business Managment by Samyuktha and Shirisha </p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>
</html>
<?php 
?>