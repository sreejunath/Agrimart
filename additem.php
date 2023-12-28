<?php


$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$id=$_GET['id'];

$sql="SELECT * FROM vegdata WHERE id='$id'";

$result=mysqli_query($data,$sql);

$row=mysqli_fetch_array($result);

if(isset($_POST['apply']))
{
	$img=$_POST['img'];
	$name=$_POST['pname'];
	$price=$_POST['price'];
	$q=$_POST['qua'];
	$dt=$_POST['dt'];

	$s="INSERT INTO cart(pimg,pname,pprice,qu,dt)VALUES('$img','$name','$price','$q','$dt')";

	$r=mysqli_query($data,$s);

	if($r)
	{
		echo "<script>alert('Added');</script>";
		echo "<script>window.location='qclist.php'</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>itemadd</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  </nav>

	<center>
	<div style="width:500px;height:auto; margin-top:34px;">
  <form method="post" action="#">
  	<div>
       <label for="formFileLg" class="form-label">Image</label>
     <input class="form-control form-control-lg" name="img" id="formFileLg" type="file">
      </div>
  	<label  class="col-form-label">Product Name</label>
  	<input type="text" name="pname" class="form-control" value="<?php echo $row['pdt'];?>">
  	<label  class="col-form-label">Price</label>
  	<input type="text" name="price" class="form-control">
  	<label  class="col-form-label">Quality</label>
  	<input type="text" name="qua"value="<?php echo $row['msg'];?>" class="form-control">
  	<label  for="disabledTextInput" class="col-form-label">Date</label>
  	<input type="text" name="dt" value="<?php echo $row['dt'];?>" class="form-control">
  	<br>
  	<button type="submit" name="apply" class="btn btn-primary">Add Product</button>
</form>
</div>
</center>

</body>
</html>