<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-color:white">
<nav class="navbar sticky-top navbar-light bg-light">
  
  <a class="navbar-brand" href="home.php">
    <h4 style="margin-left:12px;">AgriMart</h4></a>
  <button onclick="cart()" type="submit"class="btn btn-outline-primary" style="margin-left:900px;">carts</button>
  <button onclick="home()" type="submit"class="btn btn-outline-primary"style="margin-right: 12px;">Go back</button>
</nav>
</body>
<script>
  function cart()
  {
    open("cartdetails.php");
  }
  function home()
  {
    open("user.php");
  }
  </script>
</html>