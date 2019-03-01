<?php
session_start();
?>
<body background="judy.jpg">
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WholeSaler-Login</title>
<link rel="stylesheet" href="WholeSaler/styles.css" type="text/css" />
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
                            	<li ><a href="wholesaler_login.php">Home</a></li>																															
                                <li><a href="supplier.php">Suppliers</a></li>
								<li><a href="Bills.php">Orders</a></li>
								<li><a href="Logout.php">Logout</a></li>
          </ul>
			</nav>



			</aside>

		<section id="content" class="column-right">

	    <article>

		<blockquote><p><p>&nbsp;</p>

		<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
		<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
        
		<fieldset>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
					<!--NEVER USE KEY WORDS AS THE VARIABLES AND NAMES... -->
					<legend><strong><h3>Order Information</h3></strong></legend>
					<form action="Bills.php" method="POST">
						<p><label for="name"><strong>ORDER_ID:</strong></label>
						<input type="interger" name="ORDER_ID" id="name"  placeholder = "Order-ID" required/><b/></p>
            <br>
            
            
        
            
            

						<p><input type="submit" name="show" class="formbutton" value="Show" /></p>

					</form>

		</fieldset>
    <?php if(isset($_POST['show']))
    {
		$ORDER_ID=$_POST['ORDER_ID'];
	}?>
		<fieldset>
		<legend><strong><h3>Details for ORDER_ID:<?php echo $ORDER_ID ?> </h3></strong></legend>
		<table>
			<tr>
				<th>ORDER_ID</th>
				<th>Supplier_Name</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>PhoneNumber</th>
				
				
				
			</tr>
			<?php
				$conn = mysqli_connect("localhost","root","","wholesale");
				$sql = "SELECT SUPPLIER_ID,NAME,STREET,CITY,STATE,PHONENUMBER FROM SUPPLIER   WHERE SUPPLIER.ORDER_ID= $ORDER_ID";
				$result = mysqli_query($conn,$sql);
				
			 ?>

            <?php
			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			
			echo "<td>",$row['SUPPLIER_ID'],"</td>";
            echo "<td>",$row['NAME'],"</td>";
            echo "<td>",$row['STREET'],"</td>";
            echo "<td>",$row['CITY'],"</td>";
		    echo "<td>",$row['STATE'],"</td>";
		    echo "<td>",$row['PHONENUMBER'],"</td>";
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

	

	</section>


</body>
</html>