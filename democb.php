<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	 print("Database Connectivity Error");
}
$phno=$_POST["no"];
$cb=$_POST["msg"];


$count=mysqli_query($con,"insert into chatbox values('$phno','$cb')");
if($count>=2)
{
	 print("Thank you For Messaging us , We Will Reply you Soon!!"); 
}
mysqli_close($con);
?>

</body>
</html>