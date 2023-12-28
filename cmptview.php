<?php

include 'adminpanel.php';

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM cmpt WHERE id>0";

$result=mysqli_query($data,$sql);
?>
<br>
<table class="table table-hover">
		<tr>
			<th width="10%">Name</th>
			<th width="10%">Mail</th>
			<th width="10%">Date</th>
			<th width="10%">Complaint</th>
		</tr>
	</table>
<?php
while ($row=mysqli_fetch_array($result)) {

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
 <table class="table table-hover">
   	   <tr>
   	   	  <td width="10%"><?php echo $row['name'];?></td>
   	   	  <td width="10%"><?php echo $row['mail'];?></td>
   	   	  <td width="10%"><?php echo $row['dt'];?></td>
   	   	  <td width="10%"><?php echo $row['cpt'];?></td>
   	   </tr>
   </table>
</body>
</html>	

  	
 <?php
  }
?>