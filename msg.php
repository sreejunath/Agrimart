
<?php

include 'adminpanel.php';

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['apply']))
{
	$msg=$_POST['msg'];

	$s="INSERT INTO msg(msg)VALUES('$msg')";

	$r=mysqli_query($data,$s);

	if($r)
	{
		echo "<script>alert('Messsage sent');</script>";
		echo "<script>window.location='msg.php'</script>";
	}
}
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
<center>
  <form method="post" action="#" style="width:500px;height:auto;">
  	<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
    <textarea  name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
   </div>
  	<button type="submit" name="apply"class="btn btn-primary">submit</button>
  </form>
</center>  
</body>
</html>