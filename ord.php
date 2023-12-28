
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AgriMart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>AgriMart</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cmpt.php">Complaint</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="rate.php">Rating</a>
        </li>
   </div>
        
      </ul>
    </div>
  </div>
  <button onclick="ord()" class="btn btn-outline-primary" style="margin-right:55px;">Orders</button>
  <button onclick="carts()" class="btn btn-outline-primary" style="margin-right:55px;">carts</button>
  <button onclick="home()" class="btn btn-outline-primary" style="margin-right:40px;">HOME</button>
</nav>
<br>
</body>
<script>
  function carts()
  {
    open('cartdetails.php');
  }
  function home()
  {
    open('user.php');
  }
  function ord()
  {
    open('ord.php');
  }
</script>
</html>
<?php
error_reporting(0);


$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM buy";

$result=mysqli_query($data,$sql);



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
	<br>
	<center><h3>Orders</h3></center>
  <table class="table table-hover">
  	  <tr>
  	  	<th width="5%">Product name</th>
  	  	<th width="5%">Price</th>
  	  	<th width="5%">Quantity</th>
  	  	<th width="5%">Amount pay</th>
  	  	<th width="5%">Address</th>
  	  	<th width="5%">Phone:No</th>
  	  	<th width="5%">Date</th>
  	  </tr>
  </table>


<?php

while ($row=mysqli_fetch_array($result)) {
	?>
	<table class="table table-hover">
		<tr>
			<td width="5%"><?php echo $row['pname'];?></td>
			<td width="5%"><?php echo $row['pprice'];?></td>
			<td width="5%"><?php echo $row['qnty'];?></td>
			<td width="5%"><?php echo $row['pa'];?></td>
			<td width="5%"><?php echo $row['ad'];?></td>
			<td width="5%"><?php echo $row['ph'];?></td>
			<td width="5%"><?php echo $row['dt'];?></td>
		</tr>
</table>

<?php
  $total=$total+($row['qnty']/1000)*$row['pprice'];
}
?>
<center>
<table class="table table-hover" style="width:50px; height: auto;">
  <tr>
    <th width="5%">Total</th>
  </tr>
</table>
<table class="table table-hover" style="width:50px; height: auto;">  
  <tr>
    <td width="5%"><?php echo number_format($total,2);?></td>
  </tr>
</table>
</center>
</body>
</html>