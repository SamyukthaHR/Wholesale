<!doctype html>
<body background="minion.jpg">
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
                            		<li class="selected-item"><a href="wholesaler_login.php">Home</a></li>
									<li class="selected-item"><a href="supplier.php">Suppliers</a></li>
									<li class="selected-item"><a href="Bills.php">Orders</a></li>
									<li class="selected-item"><a href="Logout.php">Logout</a></li>
          </ul>
			</nav>



			</aside>

		<section id="content" class="column-right">

	    <article>

		<blockquote><p><p>&nbsp;</p>

		<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
		<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
		
  </fieldset>
<br><br>
  <fieldset>
        <!--YOU NEED TO WRITE AN ACTION HERE...-->
      <legend><strong>Suppliers</strong></legend>

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
          $conn = mysqli_connect("localhost","root","","wholesale");
		  $sql = "SELECT * FROM SUPPLIER ";
          $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysql_error($conn));
          $row = mysqli_fetch_assoc($result);
          do { ?>


        <tr>
          <td><?php echo $row['SUPPLIER_ID']; ?></td>
          <td><?php echo $row['NAME']; ?></td>
          <td><?php echo $row['STREET']; ?></td>
          <td><?php echo $row['CITY']; ?></td>
		  <td><?php echo $row['STATE']; ?></td>
		  <td><?php echo $row['PHONENUMBER']; ?></td>
		  <td><?php echo $row['ORDER_ID']; ?></td>
        </tr>

        <?php } while($row = mysqli_fetch_assoc($result)) ?>

      </table>


  </fieldset>

</fieldset>
  	</article>





			<footer class="clear">
				<p>&copy; WholeSale Business Managment by Samyuktha and Shirisha</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>
</html>