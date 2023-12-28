<?php


error_reporting(0);

session_start();

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        .form-container {
            
            max-width: 400px;
            margin: 0 auto;
            padding: 20px; 
            border-radius: 5px; 
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-light bg-light">
  
  <a class="navbar-brand" href="home.php">
    <h4 style="margin-left:12px;">AgriMart</h4></a>
  
  <button onclick="home()" type="submit"class="btn btn-outline-primary"style="margin-right: 12px;">Go back</button>
   </nav>
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="text-center">Login</h2>
            <form method="post" action="logincheck.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"  required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
              </div>
              <button type="submit" name="apply" class="btn btn-primary btn-block" >Login</button>
              <h5 style=" margin-left: 63px;">Not a member?<a href="sign.php">signup</a></h5>


                      <?php

                       if($_SESSION['message'])
                       {
                        $msg=$_SESSION['message'];

                        echo "<script type='text/javascript'>
                        
                        alert('$msg');

                        </script>";
                       }
                      ?>
             </form>
            </div>
        </div>

    </body>
    <script>
        function home()
        {
            open("home.php");
        }
    </script>
    </html>