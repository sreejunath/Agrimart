
<?php
include 'style.php';
?>

<?php

error_reporting(0);

$host="localhost";
$user="root";
$pass="";
$db="agrimart";

$data=mysqli_connect($host,$user,$pass,$db);

if($data===false)
{
  die("connection lost");
}

$sql="SELECT * FROM cart_details ORDER BY cdid ASC";

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
<center>

    <table class="table table-hover">
        <h1>Cart details</h1>
        <tr>
            <th width="10%">Product</th>
          <th width="10%">Price</th>
            <th width="10%">Quantity</th>
            <th width="10%">Date</th>
            <th width="10%">Delete</th>
             <th width="13%">Amount Pay</th>
      
        </tr>
    </table>    
</center>       
        <?php


    while($row=mysqli_fetch_array($result)) 
    {
    ?>
    <center>
        <table class="table table-hover">

     <tr>
        <td width="10%"><?php echo $row['pname'];?></td>
        <td width="10%"><?php echo $row['pprice'];?></td>
        <td width="10%"><?php echo $row['Qnty'];?></td>
        <td width="10%"><?php echo $row['dt'];?></td>
        <td width="10%">
    <?php echo "<a class='btn btn-danger' href='delete.php?pid=" . $row['cdid'] ."'>Remove</a>"; ?>

</td>
<td width="10%">Rs.<?php echo $row['cp'];?>

</td>
    <td width="1%"><?php echo "<a href='buy.php?pid=".$row['cdid']." ' class='btn btn-primary'>Buy</a>";?></td>
     </tr>
     </table>
    </center>
<?php
 $total=($row['Qnty']/1000)*$row['pprice'];
 $totalamount +=$total;
 }
 
  
?>
<center>
 <table class="table table-hover" style="width:100px;height:auto;">
     <tr>
         <th>total</th>
     </tr>
    </table>
    <table class="table table-hover" style="width:100px;height:auto;"> 
     <tr>
     <td>Rs.<?php echo number_format($totalamount,2);?></td>
     </tr>
 </table>
</center>
</body>
<script>
    function buy(){
        open('buy.php');
        <?php
        $s="INSERT INTO price(price)VALUES('$totalamount')";

        $r=mysqli_query($data,$s);
      ?>
    }
</script>
</html>



    