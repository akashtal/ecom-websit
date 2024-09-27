<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecom Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home_product.css">
<!-- Google font --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
 
    


</head>
<body>

     <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-2 d-none d-sm-none d-md-block">
                        <a class="brand-name" href="index.php"><img src="assets/img/logo1.png" alt="Logo"></a>
                    </div>

                    <div class="col-md-4 p-2">
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        
                        </form>
                     </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=cart">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <?php
                            $session_id = $_SESSION['session_id'];

                            if (empty($session_id) || $session_id == 0) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user"></i> Profile
                                    </a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=logout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user"></i> Logout
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=shop">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fashions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Headphone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Grocery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tv & Monitor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Your content goes here -->

    <!-- Bootstrap JS and other scripts go here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ecew3iqZxpT0VPOFM7/8YjOMb2XLZxCeux6SN2yFpk9xS72jkEtQQ0eD9P4EXqDR" crossorigin="anonymous"></script>