
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

$host = "localhost";
$user = "root";
$pass = "";
$db = "agrimart";

$data = mysqli_connect($host, $user, $pass, $db);

if ($data === false) {
    die("connection lost");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .prod{
            width: 250px;
            height: 200px;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
            
        }
        img{
            width: 200px;
            height: auto;
        }
        
    </style>
  
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM cart ORDER BY cid ASC ";
        $result = mysqli_query($data, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                error_reporting(0);
                ?>
                <div class="col-lg-4 mb-4">
                    <form action="user.php" method="post">
                        <div class="card p-3" style="width: 18rem;">
                            <img src="<?php echo $row['pimg']?>" alt="img" class="img-fluid">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['pname']; ?></h5>
                                <input type="hidden" name="hidden_item" value="<?php echo $row['pname']; ?>">
                                <p class="card-text">Price: <?php echo $row['pprice']; ?></p>
                                <input type="hidden" name="hidden_price" value="<?php echo $row['pprice']; ?>">
                                 <p class="card-text">Quality: <?php echo $row['qu']; ?></p>
                                
                                 <p class="card-text">Date:<?php echo $row['dt'];?></p>
                                 <input type="hidden" value="<?php echo $row['dt'];?>"
                                 name="hiddendt" class="form-control">
                                
                                 <select class="form-control" name="qnty">
                                    <option>250 gram</option>
                                    <option>500 gram</option>
                                    <option>1000 gram</option>
                                 </select>
                                 <br>
                                <button type="submit" name="cart" value="cart" class="btn btn-primary">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
            }
        }
        ?>

    </div>
</div>

<?php
error_reporting(0);

if (isset($_POST['cart'])) {
    $product = $_POST['hidden_item'];
    $pprice = $_POST['hidden_price'];
    $dt = $_POST['hiddendt'];
    $qnty=$_POST['qnty'];
   $total=($qnty/1000)*$pprice;

    $s = "INSERT INTO cart_details(pname, pprice, dt,Qnty,cp) VALUES('$product','$pprice','$dt','$qnty','$total')";
    $r = mysqli_query($data, $s);
    if ($r) {
        
        echo "<script>alert('Success');</script>";
        echo "<script>window.location='user.php'</script>";
    } else {
        echo "<script>alert('Not inserted');</script>";
        echo "<script>window.location='user.php'</script>";
    }
}
?>

</body>
</html>
