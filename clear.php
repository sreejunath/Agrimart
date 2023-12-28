<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "agrimart";

$data = mysqli_connect($host, $user, $pass, $db);

$s="DELETE FROM buy";
$r=mysqli_query($data,$s);
if($r)
{
	echo "<script>alert('clear');</script>";
	echo "<script>window.location='orders.php'</script>";
}
?>