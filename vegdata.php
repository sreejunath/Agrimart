<?php

include 'seller.php';

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
	<title>veg data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<center><h2>Vegetable details</h2></center>
	<br>
 <table class="table table-hover">
 	<tr>
 		<th width="10%">ProductName</th>
 		<th width="5%">Quality</th>
 		<th width="5%">Date</th>
 	</tr>
 </table>
 <?php
    while($row=mysqli_fetch_array($result))
    {
    	?>
    	<table class="table table-hover">
    		<tr>
    			<td width="10%"><?php echo $row['pdt'];?></td>
    			<td width="5%"><?php echo $row['msg'];?></td>
    			<td width="5%"><?php echo $row['dt'];?></td>
    		</tr>
    	</table>
    <?php
    }
 ?>
</body>
</html>