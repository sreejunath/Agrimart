<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

if($_GET['id'])
{

$value=$_GET['id'];

$sql="DELETE FROM data WHERE id='$value'";

$result=mysqli_query($data,$sql);

if($result)
{
	header("location:sellerlist.php");
}
}

?>