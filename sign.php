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
            <h2 class="text-center">Signup</h2>
            <form method="post" action="signupcheck.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"  required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="mail" class="form-control" id="email" placeholder="Enter your email" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="userType">User Type</label>
                    <select name="usertype" class="form-control" id="userType" required>
                        <option value="user">User</option>
                        <option value="seller">Seller</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block" >Sign Up</button>
                <h5 style=" color: black; margin-left: 95px;"> Already have an account <a href="login.php">login</a>?<h5>

                       <?php
                              error_reporting(0);
                              session_start();
                              session_destroy();

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

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
    function home() {

        open('home.php');
        
    }
</script>
</html>
