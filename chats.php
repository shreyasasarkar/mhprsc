<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(odd) {
  background-color: #9B9897;
}
</style>
</head>
<body>
		<?php
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	 print("Database Connectivity Error");
}
$rs=mysqli_query($con,"select*from chatbox");
?>
<table>
<tr>		
			<td>Ph No : </td>
			<td> Messages:</td>
</tr>

<?php
    while ($row=mysqli_fetch_array($rs))
	{
		?>
		<tr>
			<td><?php print($row['phno']); ?></td>
			<td><?php print($row['cb']); ?></td>
		</tr>
		<?php	
	}
	mysqli_close($con);
	?>
</table>
</body>
</html>