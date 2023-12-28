<?php

include 'seller.php';

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM rate";

$result=mysqli_query($data,$sql);
?>
<br>
<table class="table table-hover">
		<tr>
			<th width="10%">Product name</th>
			<th width="10%">Rating</th>
			<th width="10%">Date</th>
		</tr>
</table>
<?php

while($row=mysqli_fetch_array($result))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AgriMart</title>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	</head>
	<body>
	
	</body>
	</html>
	<table class="table table-hover">
		<tr>
			<td width="10%"><?php echo $row['pdt'];?></td>
			<td width="10%"><?php echo $row['rate'];?></td>
			<td width="10%"><?php echo $row['date'];?></td>
		</tr>
	</table>

	<?php
  }
	?>

