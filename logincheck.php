<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['apply']))
{
  $name=$_POST['name'];

  $pass=$_POST['password'];

  $sql="SELECT * FROM data WHERE name='$name' AND password='$pass'";

  $result=mysqli_query($data,$sql);

if($row=mysqli_fetch_array($result))
 {
    if($row['usertype']=="Admin")
    {
        header("location:adminpanel.php");
    }
    elseif ($row['usertype']=="QC") {

        header("location:Qc.php");
    }
    elseif ($row['usertype']=="Seller") {

        header("location:seller.php");
    }
    elseif($row['usertype']=="user") {

        header("location:user.php");
    }
    else{
         echo "<script>alert('Invaild');</script>";
         echo "<script>window.location='home.php'</script>";
    }
  }
else
{
  echo "<script>alert('not have an account');</script>";
  echo "<script>window.location='home.php'</script>";
 }
}


?>