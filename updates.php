
<form method="post" action="#">
  	
  	<label>Name</label>

  	<input type="text" name="name" value=<?php echo $row['name'];?> >
  	<label>Mail</label>
  	<input type="email" name="mail" value=<?php echo $row['mail'];?>>

  	<label>Password</label>
  	<input type="text" name="password" value=<?php echo $row['password'];?>>

  	<input type="submit" name="apply" value="update">
</form>
<div class="form-group">
                             <input type="date" class="form-control" id="product" name="date" value="<?php echo $row['dt'] ;?>">
                           </div>
                           <img class="prod" src="<?php echo $row['pimg']; ?>" class="card-img-top" alt="image">
                           <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "agrimart";
$data = mysqli_connect($host, $user, $pass, $db);

if (isset($_POST['apply'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM data WHERE name = ? AND password = ? ";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $name, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    if ($row) {
        if ($row['usertype'] == "Admin") {
            header("location: adminpanel.php");
        } elseif ($row['usertype'] == "QC") {
            header("location: Qc.php");
        } elseif ($row['usertype'] == "Seller") {
            header("location: seller.php");
        } else {
            header("location: cart2.php");
        }
    } else {
        header("location: home.php");
    }
}
?>
