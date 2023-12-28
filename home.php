<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrimart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h3>AgriMart</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign.php">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron text-center">
        <h1>Welcome to Our Vegetable Store</h1>
        <p>Fresh and Healthy Vegetables for You</p>
        <a class="btn btn-primary" href="login.php">Shop Now</a>
    </div>

    <!-- Featured Products -->
    <div class="container mt-5">
        <h2>Featured Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div>
                    <img src="tommato.avif" alt="Product 1"  style="width:214px;height:auto;">
                    
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div>
                    <img src="carrot.avif" alt="Product 2"  style="width:214px;height:auto;">
                    
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
               
                    <img src="m.avif" alt="Product 3"  style="width:214px;height: auto;">
                   
                </div>
            </div>
        </div>
    </div>

   
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 AgiMart</p>
    </footer>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>