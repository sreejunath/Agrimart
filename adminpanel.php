<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        
        .navbar-custom {
            background-color: white; 
            
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="adminpanel.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userlist.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sellerlist.php">Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quality controller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="msg.php">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">Orders</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <!-- Sidebar -->
                <div class="list-group">
                    
                    <a href="userlist.php" class="list-group-item list-group-item-action">Users</a>
                    <a href="sellerlist.php" class="list-group-item list-group-item-action">Sellers</a>
                    <a href="qclist.php" class="list-group-item list-group-item-action">Quality controller</a>
                    <a href="cmptview.php" class="list-group-item list-group-item-action">Complaint</a>
                    <a href="ratelist.php" class="list-group-item list-group-item-action">Rating</a>
                    
                </div>
                
                
            </div>
            <div class="col-lg-9">
                <!-- Content -->
                <h1>Welcome to the Dashboard</h1>
              
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
