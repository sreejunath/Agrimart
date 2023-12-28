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
  <button onclick="carts()" class="btn btn-outline-primary" style="margin-right:55px;">carts</button>
  <button onclick="home()" class="btn btn-outline-primary" style="margin-right:40px;">HOME</button>
</nav>
<br>
<div class="alert alert-primary" role="alert">
  use -> for rating!
</div>
</body>
<script>
  function carts()
  {
    open('cartdetails.php');
  }
  function home()
  {
    open('home.php');
  }

</script>
</html>

<?php

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM cart_details";

$result=mysqli_query($data,$sql);

?>
<?php

if(isset($_POST['apply']))
{
  $name=$_POST['hidden_item'];

  $rate=$_POST['rt'];

  $s="INSERT INTO rate(pdt,rate)VALUES('$name','$rate')";

  $r=mysqli_query($data,$s);

  if($r)
  {
    echo "<script>alert('rated succesfully');</script>";
    echo "<script>window.location='rate.php'</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rate</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
    <center>
   <?php
    while ($row=mysqli_fetch_array($result)) {
        ?>
        <div style="margin-top: 34px;">
         <form method="post" action="rate.php" style="width: 500px;height: auto; margin-top:23px;">
          <h3 style="margin-top:78px;"><?php echo $row['pname'];?></h3>
          <input type="hidden" name="hidden_item" value="<?php echo $row['pname'];?>">
         <input type="range" name="rt" class="form-range" min="0" max="5" step="0.5" id="customRange3">
         <button type="submit" name="apply"class="btn btn-primary" >Rate</button>
       </form>
      </div>
   <?php
    }
   ?>
</center>
</body>
</html>