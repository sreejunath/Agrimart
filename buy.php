<?php
include 'style.php';

error_reporting(0);

$host = "localhost";
$user = "root";
$pass = "";
$db = "agrimart";

$data = mysqli_connect($host, $user, $pass, $db);

$id = $_GET['pid'];


$sql = "SELECT * FROM cart_details WHERE cdid='$id'";

$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);

?>


<?php

$s = "SELECT * FROM buy";
$r = mysqli_query($data, $s);
$ro = mysqli_fetch_array($r);

?>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $pn = $_POST['pname'];
    $pp = $_POST['pprice'];
    $qn = $_POST['Qnty'];
    $pr = $_POST['price'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $add = $_POST['ad'];
    $ph = $_POST['ph'];
   

    $s = "INSERT INTO buy(pname, pprice, qnty, pa, fn, ln, ad, ph) VALUES ('$pn', '$pp', '$qn', '$pr','$fn', '$ln', '$add', '$ph')";
    $r = mysqli_query($data, $s);

    if ($r) {
        echo "<script>alert('proceed');</script>";
        echo "<script>window.location='user.php'</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgriMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">
</head>
<body>
<form method="POST" action="#" class="row g-3" style="margin-left: 34px;margin-top: 34px;">
    <div class="col-md-4">
        <input type="hidden" name="pname" value="<?php echo $row['pname']; ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['pprice']; ?>">
        <input type="hidden" name="Qnty" value="<?php echo $row['Qnty']; ?>">
        <input type="hidden" name="price" value="<?php echo $row['cp']; ?>">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" name="fn" class="form-control" id="validationDefault01"
               value="<?php echo $ro['fn']; ?>" required>
         
      
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" name="ln" class="form-control" id="validationDefault02"
               value="<?php echo $ro['ln']; ?>" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Address</label>
        <input type="text" name="ad" class="form-control" value="<?php echo $ro['ad']; ?>"
               required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Phone no</label>
        <input type="number" name="ph" class="form-control" value="<?php echo $ro['ph']; ?>"
               required>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
            </label>
        </div>
    </div>
    <div class="col-12">
        <button name="proceed" class="btn btn-primary" type="submit">Proceed</button>
    </div>
</form>
</body>
</html>
