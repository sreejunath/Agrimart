<?php
error_reporting(0);

$host="localhost";

$user="root";

$pass="";

$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT * FROM vegdata";

$result=mysqli_query($data,$sql);

$row=mysqli_fetch_array($result);
?>

<?php
  

if(isset($_POST['submit']))
{
    $name=$_POST['name'];

    $opt=$_POST['opt'];

    $s="INSERT INTO vegdata(pdt,msg)VALUES('$name','$opt')";

    $r=mysqli_query($data,$s);

    if($r===true)
    {
         echo "<script>alert('Verified');</script>";

         echo "<script>window.location='Qc.php'</script>";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Control Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        body {
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
          <span class="navbar-text">
              <h3>Agrimart</h3>
           </span>
       </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                  
                    <div class="card-body">
                        <form method="post" action="Qc.php">
                            <div class="form-group">
                                <label for="product">Product Name:</label>
                                <input type="text" class="form-control" id="product" placeholder="Enter product name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="comments">Quality</label>
                                <select class="form-control" name="opt" required>
                                    <option>Poor</option>
                                    <option>Average</option>
                                     <option>Good</option>
                                </select>                            
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <h2>Veg details</h2>
    <table class="table table-hover">
                          <tr>
                             <th width="5%">Verified products</th>
                             <th width="5%">Quality</th>
                             <th width="5%">Date</th>
                          </tr>
                          <br>
</body>
</html>

<?php       

    while($row=mysqli_fetch_array($result))
    {
    ?>
     <table class="table table-hover">
        <tr>
            <td width="10%"><?php echo $row['pdt'];?></td>
            <td width="10%"><?php echo $row['msg'];?></td>
            <td width="10%"><?php echo $row['dt'];?></td>
        </tr>
    </table>
  <?php
  }  
  ?>  