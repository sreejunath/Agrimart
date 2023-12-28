<?php

include 'seller.php';

$host = "localhost";
$user = "root";
$pass = "";
$db   = "agrimart";

$data = mysqli_connect($host, $user, $pass, $db);

$sql="SELECT * FROM msg";

$result=mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AgriMart</title>
</head>
<body>
	<br>
    <table class="table table-hover">
    	<tr>
    		<th width="10%">Message</th>
    		<th width="10%">Date</th>
    	</tr>
    </table>
</body>
</html>
<?php
  while($row=mysqli_fetch_array($result))
  {
?>
 <table class="table table-hover">
 	<tr>
 		<td width="10%"><?php echo $row['msg'];?></td>
 		<td width="10%"><?php echo $row['date'];?></td>
 	</tr>
 </table>
 <?php
}
?>