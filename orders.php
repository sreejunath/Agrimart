<?php
 
error_reporting(0);

include 'adminpanel.php';

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM buy";

$result=mysqli_query($data,$sql);



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
	<br>
  <table class="table table-hover">
  	  <tr>
  	  	<th width="5%">Product name</th>
  	  	<th width="5%">Price</th>
  	  	<th width="5%">Quantity</th>
  	  	<th width="5%">Amount pay</th>
  	  	<th width="5%">UserName</th>
  	  	<th width="5%">Address</th>
  	  	<th width="5%">Phone:No</th>
  	  	<th width="5%">Date</th>
  	  </tr>
  </table>
</body>
</html>

<?php

while ($row=mysqli_fetch_array($result)) {
	?>
	<table class="table table-hover">
		<tr>
			<td width="5%"><?php echo $row['pname'];?></td>
			<td width="5%"><?php echo $row['pprice'];?></td>
			<td width="5%"><?php echo $row['qnty'];?></td>
			<td width="5%"><?php echo $row['pa'];?></td>
			<td width="5%"><?php echo $row['fn'];?></td>
			<td width="5%"><?php echo $row['ad'];?></td>
			<td width="5%"><?php echo $row['ph'];?></td>
			<td width="5%"><?php echo $row['dt'];?></td>
		</tr>
	</table>
<?php

$total=$total+($row['qnty']/1000)*$row['pprice'];
}
?>
<center>
	<table class="table table-hover" style="width:100px; height:auto;">
	  <tr>
		<th width="5%">Total</th>
		<th width="5%">Clear out</th>
	  </tr>
	  <tr>
	  	<td width="5%"><?php echo number_format($total,2);?></td>
	  	<td width="5%"><?php echo "<a class='btn btn-danger'href='clear.php'>Clear</a>";?></td>
	  </tr>
	</table>
	</center>