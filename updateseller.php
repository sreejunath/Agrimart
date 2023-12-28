<?php

include 'adminpanel.php';

error_reporting(0);

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

$id=$_GET['id'];

$sql="SELECT * FROM data WHERE id='$id'";

$result=mysqli_query($data,$sql);

$row=mysqli_fetch_array($result);


if(isset($_POST['apply']))
{
	$name=$_POST['name'];

	$mail=$_POST['mail'];

	$pass=$_POST['password'];

	$sql2="UPDATE data SET name='$name',mail='$mail',password='$pass' WHERE id='$id'";

	$result1=mysqli_query($data,$sql2);

	if($result1)
	{

		header("location:sellerlist.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<div style="width:500px;height:auto;  border:7px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
<form method="post" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $row['name'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mail</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mail" value="<?php echo $row['mail'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $row['password'];?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="apply">Update</button>
</form>
</div>
</center>
</body>
</html>
