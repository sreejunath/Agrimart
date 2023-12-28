
<?php

error_reporting(0);

$host="localhost";

$user="root";

$pass="";

$db="agrimart";


$data=mysqli_connect($host,$user,$pass,$db);

$s="SELECT * FROM cmpt WHERE id>0";

$r=mysqli_query($data,$s);



if(isset($_POST['apply']))
{
    $n=$_POST['name'];
    $m=$_POST['m'];
    $c=$_POST['c'];

    $sql="INSERT INTO cmpt(name,mail,cpt)VALUES('$n','$m','$c')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo "<script>alert('Your complaint posted');</script>";
        echo "<script>window.location='user.php'</script>";
    }

   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Box</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        
        form{
            margin-right: 56px;
        }
    </style>
    
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
  <button onclick="home()" class="btn btn-outline-primary" style="margin-right:40px;">HOME</button>
</nav>
  <br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Complaint Box</h2>
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="m"class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="complaint">Complaint</label>
                        <textarea class="form-control" name="c" id="complaint" rows="4" placeholder="Describe your complaint" required></textarea>
                    </div>
                    <button type="submit" name="apply"class="btn btn-primary" >Submit</button>
                </form>
                <br>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <table class="table table-hover" style="width:600px; height: auto; margin-left: 400px;">
        <tr>
            <th width="10%">Name</th>
            <th width="10%">Mail</th>
            <th width="3%">Date</th>
            <th width="5%">Complaint</th>
        </tr>
    </table>
    <?php
     while($row=mysqli_fetch_array($r))
     {
        ?>
      <table class="table table-hover" style="width:600px;height:auto;margin-left: 400px;">
    <tr>
        <td width="10%"><?php echo $row['name'];?></td>
        <td width="6%"><?php echo $row['mail'];?></td>
        <td width="6%"><?php echo $row['dt'];?></td>
        <td width="11%"><?php echo $row['cpt'];?></td>
    </tr>
</table>
<?php
  }
?>
</body>
</html>
<script>
    function home(){
        open('home.php');
    }
</script>