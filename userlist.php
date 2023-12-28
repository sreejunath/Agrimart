<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>userdetails</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

</body>
</html>

<?php

include "adminpanel.php";
?>
<center><h2>User data</h2></center>
<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);


if($data===false)
{
	die("connection error");

}

$sql="SELECT * FROM data WHERE usertype='user'";

$result=mysqli_query($data,$sql);

?>
<table class="table table-hover">
	<tr>
	<th width="8%">ID</th>
	<th width="8%">Name</th>
	<th width="15%">Mail</th>
	<th width="8%">Password</th>
	<th width="8%">Delete</th>
	</tr>
</table>

<?php

while($row=mysqli_fetch_array($result))
{
	?>

   <table class="table table-hover">
	<tr>
		<td width="8%"><?php echo $row['id'];?></td>
		<td width="8%"><?php echo $row['name'];?></td>
		<td width="15%"><?php echo $row['mail'];?></td>
		<td width="8%"><?php echo $row['password'];?></td>
		<td width="8%">
			<?php echo "<a class='btn btn-danger' href='deleteuser.php?id= ".$row['id']."'>Delete</a>"?>
		</td>
	</tr>
</table>

<?php
}

?>
