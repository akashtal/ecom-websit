    


     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="dash/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="dash/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="dash/templatemo-style.css">

 <!-- Dashboard Header ---> 

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin-products">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin-accounts">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin-orders">
                                <i class="fa fa-list-alt"></i>
                               Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
       

<!-- Dashboard Header --->          

 
<!-- Add Product Here --->

<div class="container-fluid tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Product</h2>
          </div>
        </div>

<!-- php Code post method start here --->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input
    $product_name = htmlspecialchars($_POST['product_name']);
    $product_price = floatval($_POST['product_price']); // Convert to float or integer depending on your needs
    $product_des = htmlspecialchars($_POST['product_des']);
    $product_users = $new_session_id;

    // Validate and move uploaded files
    $uploadDirectory = 'assets/img/uploads';
    $photo1 = validateAndMoveFile('photo_1', $uploadDirectory);
    $photo2 = validateAndMoveFile('photo_2', $uploadDirectory);
    $photo3 = validateAndMoveFile('photo_3', $uploadDirectory);
    $photo4 = validateAndMoveFile('photo_4', $uploadDirectory);

    // Insert statement using prepared statement
    $sql = "INSERT INTO products (prod_name, prod_price, prod_desc, prod_user, prod_thumb_1,                          prod_thumb_2, prod_thumb_3, prod_thumb_4)
            VALUES (:product_name, :product_price, :product_des, :product_users, :photo1, :photo2,                  :photo3, :photo4)";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':product_price', $product_price);
    $stmt->bindParam(':product_des', $product_des);
    $stmt->bindParam(':product_users', $product_users);

    $stmt->bindParam(':photo1', $photo1);
    $stmt->bindParam(':photo2', $photo2);
    $stmt->bindParam(':photo3', $photo3);
    $stmt->bindParam(':photo4', $photo4);
    

    // Execute the statement
    $stmt->execute();
}

function validateAndMoveFile($inputName, $uploadDirectory)
{
    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
        $tmpFilePath = $_FILES[$inputName]['tmp_name'];

        // Validate file type, size, etc., before moving it
        // Example: move_uploaded_file($tmpFilePath, $uploadDirectory . $_FILES[$inputName]['name']);

        // For security, you might want to generate a unique filename
        $uniqueFilename = uniqid() . '_' . $_FILES[$inputName]['name'];
        move_uploaded_file($tmpFilePath, $uploadDirectory . $uniqueFilename);

        return $uniqueFilename;
    }

    // Handle file upload errors or no file uploaded
    return null;
}


?>


        <div class="row" >
          <div class="col-xl-6 col-lg-6 col-md-12 p-3">

            <form method="POST" enctype="multipart/form-data" style="background-color: #4e657a;">
              <div class="form-group mb-3" >
                <label for="name" style="color: #fff;">Product Name </label>
                <input id="name" name="product_name"  type="text" class="form-control validate" required  />
              </div>
              <div class="form-group mb-3">

                <label for="description" style="color: #fff;">Description</label>
                <textarea name="product_des"  class="form-control validate" rows="3" required></textarea>
              </div>
              <div class="form-group mb-3">
               
              </div>
              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="product_price"  style="color: #fff;">Price</label>
                  <input id="product_price" name="product_price" type="text" class="form-control validate" data-large-mode="true" />
                </div>
              </div>
          

       </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

            <div class="mb-3 ">
               <label for="formFile" class="form-label" style="color: #fff;">Thumbnail Image 1</label>
               <input name="photo_1" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3 ">
               <label for="formFile" class="form-label" style="color: #fff;">Thumbnail Image 2</label>
               <input name="photo_2" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3 ">
               <label for="formFile" class="form-label" style="color: #fff;">Thumbnail Image 3</label>
               <input name="photo_3" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
               <label for="formFile" class="form-label" style="color: #fff;">Thumbnail Image 4</label>
               <input name="photo_4" class="form-control" type="file" id="formFile">
            </div>
       </div>

          <div class="col-12">
            <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
