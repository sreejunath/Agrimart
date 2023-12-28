<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sellerlist</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

</body>
</html>

<?php

include 'adminpanel.php';

?>
<center><h2>Seller data</h2></center>
<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM data WHERE usertype='seller'";


$result=mysqli_query($data,$sql);

?>
 <table class="table table-hover">
 	<tr>
 		<th width="10%">ID</th>
 		<th width="10%">Name</th>
 		<th width="10%">Mail</th>
 		<th width="10%">Password</th>
 		<th width="10%">Delete</th>
 		<th width="10%">Update</th>
 	
 	</tr>
 </table>
<?php
while ($row=mysqli_fetch_array($result)) {

	?>
	<table class="table table-hover">
		<tr>
			<td width="10%"><?php echo $row['id'];?></td>
			<td width="10%"><?php echo $row['name'];?></td>
			<td width="10%"><?php echo $row['mail'];?></td>
			<td width="10%"><?php echo $row['password']?></td>
			<td width="10%"><?php echo "<a href='deleteseller.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>"?></td>
			<td width="10%"><?php echo "<a href='updateseller.php?id=".$row['id']."' class='btn btn-primary'>Update</a>"?></td>


		</tr>
	</table>
<?php
}
?>

