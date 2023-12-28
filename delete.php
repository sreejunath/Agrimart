<?php


$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

if($_GET['pid'])

{
	$value=$_GET['pid'];

	$sql="DELETE FROM cart_details WHERE  cdid='$value' ";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		header("location:cartdetails.php");
	}
}
?>