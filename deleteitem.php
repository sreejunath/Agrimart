<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

if($_GET['id'])
{
   $value=$_GET['id'];

   $sql="DELETE FROM cart WHERE qu='poor'";

   $result=mysqli_query($data,$sql);

   if($result)
   {
   	header("location:qclist.php");
   }

   $s="DELETE FROM vegdata WHERE id='$value'";

   $r=mysqli_query($data,$s);
   if($r)
   {
      header("location:qclist.php");
   }
}
?>