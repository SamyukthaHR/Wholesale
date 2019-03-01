<?php

$SUPPLIER_ID=$_POST['SUPPLIER_ID'];
$NAME=$_POST['NAME'];
$STREET=$_POST['STREET'];
$CITY=$_POST['CITY'];
$STATE=$_POST['STATE'];
$PHONENUMBER=$_POST['PHONENUMBER'];
$ORDER_ID=$_POST['ORDER_ID'];

#session_start();
$conn=mysqli_connect('localhost','root','','wholesale');
if(!$conn)
{
	die('Not connected:'.mysqli_error());
}

if(mysqli_select_db($conn,"wholesale"))
{
	echo "Connected to database";
}
$sql="INSERT INTO SUPPLIER(SUPPLIER_ID,NAME,STREET,CITY,STATE,PHONENUMBER,ORDER_ID)VALUES ('$SUPPLIER_ID','$NAME','$STREET','$CITY','$STATE','$PHONENUMBER','$ORDER_ID')";
if(!mysqli_query($conn,$sql))
{
	echo "Error in inserting";
}
else
{
	echo "Data inserted";
}
mysqli_close($conn);

?>