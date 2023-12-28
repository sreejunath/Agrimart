<?php

session_start();

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

if($data===false)
{
	die("connection lost");
}



if(isset($_POST['submit']))
 {
    $name=$_POST['name'];

    $mail=$_POST['mail'];

    $pass=$_POST['password'];

    $usertype=$_POST['usertype'];

    $check="SELECT * FROM data WHERE mail='".$mail."'";

    $result1=mysqli_query($data,$check);

    $check2=mysqli_num_rows($result1);

    if($check2>0)
    {
    	

        $_SESSION['message']="already have an account try using another mail!";

        header('location:sign.php');
    	
       
    }

    else
    {

    $sql="INSERT INTO data(name,mail,password,usertype)VALUES('$name','$mail','$pass','$usertype')";

    $result=mysqli_query($data,$sql);


     if($result)
     {
	   
        $_SESSION['message']="success!!";
	    header('location:login.php');

     }
     else
     {
     	echo "failed";
     }

   }
}

?>