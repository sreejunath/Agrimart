<?php

include 'adminpanel.php';

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM vegdata WHERE id>0";

$result=mysqli_query($data,$sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>list</title>
</head>
<body>
<table class="table table-hover">
	<tr>
		<th width="10%">Product name</th>
		<th width="10%">Quality</th>
		<th width="10%">Date</th>
		<th width="10%">Remove</th>
		<th width="10%">Add</th>
	</tr>
	<br>
</table>
</body>
</html>
<?php
while($row=mysqli_fetch_array($result))
{
	?>
	<table class="table table-hover">
		<td width="10%"><?php echo $row['pdt'];?></td>
		<td width="10%"><?php echo $row['msg'];?></td>
		<td width="10%"><?php echo $row['dt'];?></td>
		<td width="10%"><?php echo "<a href='deleteitem.php?id= ".$row['id']."' class='btn btn-danger'>Remove</a>"?></td>
		<td width="10%"><?php echo "<a href='additem.php?id= ".$row['id']."' class='btn btn-primary'>Add</a>"?></td>
	</table>
<?php
}

?>